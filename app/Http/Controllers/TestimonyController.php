<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonyRequest;
use App\Models\Testimony;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendingtestimonys = Testimony::orderBy('id', 'desc')->paginate(12);
        return view('users.members.testimony.index', compact(['pendingtestimonys']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.members.testimony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonyRequest $request)
    {
        //
        $description = $request->content;
        libxml_use_internal_errors(true);
       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/testimony/" .str_replace(" ", '_', Auth::user()->name)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
       $testimony =  new Testimony();
       $testimony->testimony = $description;
       $testimony->user_id = Auth::user()->id;
       $testimony->status = 0;
       $testimony->save();
       Notification::send(Auth::user(), new ActivatorNofification("Testimony","New testimony added"));
       return redirect()->route('testimony.index')->with('success', 'new testimony added successfully');
// return $request->all();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $testimony = Testimony::where('id', $id)->first();
        return view('users.members.testimony.update', compact(['testimony']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonyRequest $request, $id)
    {
        //
        $description = $request->content;
        libxml_use_internal_errors(true);
       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/testimony/" .str_replace(" ", '_', Auth::user()->name)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
       $testimony =  Testimony::where('id', $id)->first();
       $testimony->testimony = $description;
       $testimony->update();
       Notification::send(Auth::user(), new ActivatorNofification("Testimony","Testimony updated"));
       return redirect()->route('testimony.index')->with('success', 'Testimony updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $testimony = Testimony::where('id', $id)->first();
        $images = $testimony->getImageAll($testimony->quote);
            if (count($images) > 0){
                foreach ($images as $image){
                    unlink(public_path().$image);
                }
            }

          $testimony->forceDelete();
          Notification::send(Auth::user(), new ActivatorNofification("Testimony","Testimony deleted"));
          return redirect()->back()->with('success', "Testimony deleted successfully");

    }
}

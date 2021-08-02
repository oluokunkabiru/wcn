<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NuggetRequest;
use App\Models\Nugget;
use App\Models\Setting;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class NuggetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $nuggets = Nugget::with(['user'])->orderBy('id', 'desc')->paginate(8);
      return  view('users.admin.nugget.index', compact(['nuggets']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.admin.nugget.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(NuggetRequest $request)
    {
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

               $image_name= "/uploads/nuggets/" .str_replace(" ", '_', Auth::user()->name)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();

        $nugget = new Nugget();
        $nugget->qoute = $description;
        $nugget->user_id = Auth::user()->id;
        $nugget->save();
        $settings = Setting::with('user')->where('nugget_notification', 1)->get();
       foreach($settings as $setting){
            Notification::send($setting->user, new ActivatorNofification("Nugget","New nugget added"));
       }
        return redirect()->route('nugget.index')->with('success', 'New nugget added successfully');

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
        // return
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
        $nugget = Nugget::where('id', $id)->first();
        return view('users.admin.nugget.update', compact(['nugget']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

               $image_name= "/uploads/nuggets/" .str_replace(" ", '_', Auth::user()->name)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
       $nugget = Nugget::where('id', $id)->first();
       $nugget->qoute = $description;
       $nugget->update();
       return redirect()->route('nugget.index')->with('success', 'Nugget updated successfully');

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
        $event = Nugget::where('id', $id)->first();
        $images = $event->getImageAll($event->quote);
            if (count($images) > 0){
                foreach ($images as $image){
                    unlink(public_path().$image);
                }
            }

          $event->forceDelete();
          return redirect()->back()->with('success', "Nuggget quote deleted successfully");

    }
}

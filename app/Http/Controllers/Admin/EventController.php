<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\Setting;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::orderBy('id', 'desc')->get();

        return view('users.admin.event.index', compact(['events']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        //
        $title = $request->title;
        $description = $request->content;

       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/events/" .str_replace(" ", '_', $title)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();

       $event = new Event();
       $event->title = $title;
       $event->content = $description;
       $event->date = $request->date;
       $event->user_id = Auth::user()->id;
       $event->save();
       $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
      $url =route('readEvent', [$event->id, str_replace(" ", '_', $event->title)]);
       $settings = Setting::with('user')->where('event_notification', 1)->get();
       foreach($settings as $setting){
            Notification::send($setting->user, new ActivatorNofification($avatar, "Event","New event added", $url));
       }
       return redirect()->route('events.index')->with('success', 'New event added successfully');


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
        $event = Event::where('id', $id)->first();
        return view('users.admin.event.update', compact(['event']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        //
        $title = $request->title;
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

               $image_name= "/uploads/events/" .str_replace(" ", '_', $title)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();

       $event = Event::where('id', $id)->first();
       $event->title = $title;
       $event->content = $description;
       $event->date = $request->date;
       $event->user_id = Auth::user()->id;
       $event->update();
       return redirect()->route('events.index')->with('success', 'Event '.$event->title.' updated successfully');


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
        $event = Event::where('id', $id)->first();
        $images = $event->getImageAll($event->content);
            if (count($images) > 0){
                foreach ($images as $image){
                    unlink(public_path().$image);
                }
            }
          $event->forceDelete();
          return redirect()->back()->with('success', "Event ".$event->title. "deleted successfully");

    }
}

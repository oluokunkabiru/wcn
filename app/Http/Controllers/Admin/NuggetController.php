<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NuggetRequest;
use App\Http\Requests\NuggetUpRequest;
use App\Http\Requests\NuggeUpRequest;
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
        $nugget = new Nugget();
        $nugget->qoute = "After removing content from nugget";
        $nugget->user_id = Auth::user()->id;
        $nugget->addMediaFromRequest('file')->toMediaCollection("nuggets");
        $nugget->save();
        $settings = Setting::with('user')->where('nugget_notification', 1)->get();
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $url ="";
       foreach($settings as $setting){
            Notification::send($setting->user, new ActivatorNofification($avatar, "Nugget","New nugget added", $url));
       }
       return "Negget added successfully";
        // return redirect()->route('nugget.index')->with('success', 'New nugget added successfully');

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
    public function update(NuggetUpRequest $request, $id)
    {
        //
        $description = $request->content;
       $nugget = Nugget::where('id', $id)->first();
       $nugget->qoute = $description;
       if($request->file("image")){
        $nugget->delete($id);
        $nugget->clearMediaCollection();
        $nugget->addMediaFromRequest('image')->toMediaCollection("nuggets");
    }
       $nugget->save();
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

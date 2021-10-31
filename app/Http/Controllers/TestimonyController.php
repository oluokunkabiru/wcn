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
        $approvedtestimonys = Testimony::orderBy('id', 'desc')->where('status', 1)->paginate(12);
        $pendingtestimonys = Testimony::orderBy('id', 'desc')->where(['user_id'=> Auth::user()->id,'status'=>0])->paginate(12);
        return view('users.members.testimony.index', compact(['pendingtestimonys','approvedtestimonys']));
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
        // return isset($request->anonymous) ? "hide": "show";

        $description = $request->content;
       $testimony =  new Testimony();
       $testimony->testimony = $description;
       $testimony->user_id = Auth::user()->id;
       $testimony->status = 0;
       $testimony->anonymous = isset($request->anonymous) ? "hide": "show";
       $testimony->save();
       $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
       $url = "";//route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]);

       Notification::send(Auth::user(), new ActivatorNofification($avatar, "Testimony","New testimony added", ""));
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
       $testimony =  Testimony::where('id', $id)->first();
       $testimony->testimony = $description;
       $testimony->anonymous = isset($request->anonymous) ? "hide": "show";

       $testimony->update();
       $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
       $url = "";//route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]);

       Notification::send(Auth::user(), new ActivatorNofification($avatar, "Testimony","Testimony updated", ""));
       return redirect()->route('testimony.index')->with('success', 'Testimony updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allTestimony(){
        $pendingtestimonys = Testimony::orderBy('id', 'desc')->where('status', 0)->paginate(12);
        $approvedtestimonys = Testimony::orderBy('id', 'desc')->where('status', 1)->paginate(12);
        return view('users.admin.uses-list.update', compact(['pendingtestimonys','approvedtestimonys' ]));
    }
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
          $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
          Notification::send(Auth::user(), new ActivatorNofification($avatar, "Testimony","Testimony deleted", ""));
          return redirect()->back()->with('success', "Testimony deleted successfully");

    }
    public function approveTestimony($id, $statu){
        $testimony = Testimony::with('user')->where('id', $id)->first();
        $msg = $statu==0 ? "Testimony approved successfully":"Testimony disabled successfully";
        $status = $statu==0?1:0;
        $testimony->status = $status;
        $testimony->update();
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $avatar2 = $testimony->user->getMedia('avatar')->first()->getFullUrl('avatar');
        Notification::send($testimony->user, new ActivatorNofification($avatar, "Testimony","Testimony approved", ""));
        Notification::send(Auth::user(), new ActivatorNofification($avatar2, "Testimony","You approved testimony", ""));
        return redirect()->back()->with('success', $msg);


}
}





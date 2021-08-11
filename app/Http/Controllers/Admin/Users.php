<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\User;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderby('id', 'desc')->get();
        return view('users.admin.uses-list.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }
    public function approved($id, $statu){
        $user = User::where('id', $id)->first();
        $status=$statu==0 ? 1 : 0;
        $msg = $status==1?"approved successfully":"disabled successfully";
        $sta = $status==1?"approved":"disabled";
        $user->status = $status;
        // return $status;
        $user->update();

        Notification::send($user, new ActivatorNofification("$sta",$msg));
        // return $user->notifications;
        return redirect()->back()->with('success', ucwords($user->name)." ".$msg);
    }
    public function makeAdmin($id){
        $user = User::where('id', $id)->first();

        $status=$user->role=="admin" ? "member" : "admin";

        $user->role = $status;
        $user->update();
         $wid =" Admin withdraw from " .ucwords($user->name)." successfully";
        $mak = ucwords($user->name)." make admin successfully ";
        $msg = $status=="admin" ?  $mak:$wid;

            Notification::send($user, new ActivatorNofification($status,$msg));

        return redirect()->back()->with('success', $msg);
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
        $user = User::where('id', $id)->first();


        return redirect()->back()->with('success', ucwords($user->name)." have temporarilly deleted");
    }

    public function readNotification($id){
        // return $id;
        $userUnreadNotification= auth()->user()->notifications->find($id);
        // return $userUnreadNotification;
        if($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }

    }
    public function readAllNotification(){
        $notification = auth()->user()->unreadNotifications;
        // return $notification;
        if($notification) {
            $notification->markAsRead();
        }
        return redirect()->back();

    }
}

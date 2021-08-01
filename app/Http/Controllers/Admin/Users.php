<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;

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
        $user->status = $status;
        $user->update();
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
}

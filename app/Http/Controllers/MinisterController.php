<?php

namespace App\Http\Controllers;

use App\Http\Requests\MinisterRequest as RequestsMinisterRequest;
use App\Models\Minister;
use App\Models\MinisterRequest;
use App\Models\Notification;
use App\Models\User;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class MinisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function show(Minister $minister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function edit(Minister $minister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsMinisterRequest $request, $minister)
    {
        //
        $user = User::where('id', $minister)->first();

        $position=$user->position ==NULL ? ucwords($request->position) : "";
        $about=$user->position == NULL ? ucwords($request->about) : "";

        $user->position = $position;
        $user->about = $about;
        $user->update();
         $wid =" Ministering withdraw from " .ucwords($user->name)." successfully";
        $mak = ucwords($user->name)." make minister successfully ";
        $msg =  $position=$user->position ==NULL ?  $wid:$mak;


            FacadesNotification::send($user, new ActivatorNofification(Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar'),$position,$msg, ""));

        return redirect()->back()->with('success', $msg);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minister  $minister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minister $minister)
    {
        //
    }
}

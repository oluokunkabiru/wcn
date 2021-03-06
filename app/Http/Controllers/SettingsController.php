<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class SettingsController extends Controller
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
    public function activate(Request $request){
        $message = $request->status == 0 ? "activate ":"deactivate ";
        $notification = Setting::where('user_id', Auth::user()->id)->first();
        $notification->update([
            $request->activate => $request->status == 1 ? 0:1
        ]);
        $mg = explode("_", $request->activate);
        $stat = $mg[0];
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $url = "";//route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]);

        FacadesNotification::send(Auth::user(), new ActivatorNofification($avatar,$stat,ucwords($stat)." ".$message, $url));
        return "successfully ".$message.ucwords(str_replace("_", " ", $request->activate));
    }
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
    }
}

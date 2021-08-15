<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigRequest;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigController extends Controller
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
        $config = Configuration::where('id', $id)->first();
        return view('users.admin.configuration', compact(['config']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConfigRequest $request, $id)
    {
        //
        // return $request->all();
        $config = Configuration::where('id', $id)->first();
        $config->name = $request->name;
        $config->email = $request->email;
        $config->phone = $request->phone;
        $config->facebook = $request->facebook;
        $config->twitter = $request->twitter;
        $config->linkedin = $request->linkedin;
        $config->instagram = $request->instagram;
        $config->whatsapp = $request->whatsapp;
        $config->youtube = $request->youtube;
        $config->address = $request->address;
        if($request->file('logo')){
            $config->delete($id);
            $config->clearMediaCollection();
            $config->addMediaFromRequest('logo')->toMediaCollection("logo");
        }
        $config->save();
        return redirect()->route('admindashboard')->with('success', 'Site configuration update successfully');

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

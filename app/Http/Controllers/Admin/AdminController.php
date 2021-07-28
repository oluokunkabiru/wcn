<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdate;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::with(['user'])->orderBy('id', 'desc')->paginate(8);
        $setting = Setting::where('user_id', Auth::user()->id)->first();
        return view('users.admin.index', compact(['blogs', 'setting']));
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
        return view('users.admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdate $request, $id)
    {
        //
        $admin = User::where('id', $id)->first();
        if($request->file('avatar')){
            $admin->delete($id);
            $admin->clearMediaCollection();
            $admin->addMediaFromRequest('avatar')->toMediaCollection("avatar");
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->about = $request->about;
        if($request->password){
            if(!Hash::check($request->currentp, Auth::user()->password)){
                return redirect()->back()->with('danger', 'Current password not matched');
            }else{
                $admin->password = Hash::make($request->password);
            }
        }
        $admin->save();
        return redirect()->route('admindashboard')->with('success', 'Profile update successfully');
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

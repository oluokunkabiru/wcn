<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medias = File::OrderBy('id', 'desc')->paginate(20);
        return view('users.admin.gallery.index', compact(['medias']));
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
    public function store(GalleryRequest $request)
    {
        //
        $gallery = new File();
        $gallery->addMediaFromRequest('file')->toMediaCollection("gallery");
        $gallery->user_id = Auth::user()->id;
        $gallery->media_id = 1;
        $gallery->status =1;
        $gallery->save();
        return "Gallery added successfully";
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
        $gallery = File::where('id',$id)->first();
        $message ="";
        if($gallery->status==1){
            $gallery->status = 0;
            $message = "gallery diabled successfully";

        }else{
            $gallery->status = 1;
            $message = "gallery enabled successfully";

        }
        $gallery->update();
        return redirect()->back()->with('success', $message);

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
        $file = File::where('id', $id)->first();
        $file->delete($id);
        $file->clearMediaCollection();
        return redirect()->back()->with('success', 'File deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\User;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::orderBy('id', 'desc')->get();
        // return $blogs;
        return view('users.admin.blog.index', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        //
        $title = $request->title;
        $description = $request->content;
       $blog = new Blog();
       $blog->title = $title;
       $blog->content = $description;
       $blog->user_id = Auth::user()->id;
       $blog->addMediaFromRequest('image')->usingFileName(str_replace(" ", "_", $title))->toMediaCollection("blogs");

       $blog->save();
       
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
      $url = route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]);

       $settings = Setting::with('user')->where('blog_notification', 1)->get();
       foreach($settings as $setting){
            Notification::send($setting->user, new ActivatorNofification($avatar ,"Blog","New blog added", $url));
       }
       return redirect()->route('blogs.index')->with('success', 'New blog added successfully');

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
        return view('users.admin.blog.view');
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
        $blog = Blog::where('id', $id)->first();
        return view('users.admin.blog.update', compact(['blog']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function deleteImageFromBlog(Request $request){

        $image = $request->src;
        unlink(public_path()."/".$image);
        return "success";
    }
    public function update(BlogUpdateRequest $request, $id)
    {
        //
        $title = $request->title;
        $description = $request->content;

       $blog = Blog::where('id', $id)->first();
       $blog->title = $title;
       $blog->content = $description;
       $blog->user_id = Auth::user()->id;
       if($request->file("image")){
        $blog->delete($id);
        $blog->clearMediaCollection();
        $blog->addMediaFromRequest('image')->toMediaCollection("blogs");
    }
       $blog->save();
       return redirect()->route('blogs.index')->with('success', 'blog '.ucwords($blog->title).' updated successfully');

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
        $blog = Blog::where('id', $id)->first();
        // $images = $blog->getImageAll($blog->content);
        //     if (count($images) > 0){
        //         foreach ($images as $image){
        //             unlink(public_path().$image);
        //         }
        //     }
        $blog->delete($id);
        $blog->clearMediaCollection();
          $blog->forceDelete();
          return redirect()->back()->with('success', "Blog ".$blog->title. "deleted successfully");
    }

}

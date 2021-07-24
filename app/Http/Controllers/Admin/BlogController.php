<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           list($type, $data) = explode(';', $data);

           list($type, $data) = explode(',', $data);

           $data = base64_decode($data);

           $image_name= "/uploads/blogs/" .str_replace(" ", '_', $title)."_".  time()."_".$k.'.png';

           $path = public_path() . $image_name;

           file_put_contents($path, $data);

           $img->removeAttribute('src');

           $img->setAttribute('src', $image_name);

        }


       $description = $dom->saveHTML();

       $blog = new Blog();
       $blog->title = $title;
       $blog->content = $description;
       $blog->user_id = Auth::user()->id;
       $blog->save();
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
        return view('users.admin.blog.update');
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
        $blog = Blog::where('id', $id)->first();
        $images = $blog->getImageAll($blog->content);
            if (count($images) > 0){
                foreach ($images as $image){
                    unlink(public_path().$image);
                }
            }
          $blog->forceDelete();
          return redirect()->back()->with('success', "Blog ".$blog->title. "deleted successfully");
    }

}

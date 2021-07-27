<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Comments;
use App\Models\Event;
use App\Models\File;
use App\Models\Nugget;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function event()
    {
        $events = Event::orderBy('id', 'desc')->paginate(8);

        return view('pages.event',compact(['events']));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function nugget()
    {
        $nuggets = Nugget::with(['user'])->orderBy('id', 'desc')->paginate(10);
        return view('pages.nugget', compact(['nuggets']));
    }
    public function books()
    {
        $books = Book::with(['user'])->orderBy('id', 'desc')->paginate(8);

        return view('pages.books', compact(['books']));
    }
    public function blogs()
    {
        $blogs = Blog::with(['user'])->orderBy('id', 'desc')->paginate(8);
        // return $blogs;

        return view('pages.blog', compact(['blogs']));
    }
    public function minister()
    {
        return view('pages.ministers');
    }
    public function gallery()
    {
        $medias = File::OrderBy('id', 'desc')->where('status', 1)->paginate(20);
        return view('pages.gallery', compact(['medias']));
        // strlen(trim());

    }
    public function viewBlog($id, $title){
        $blog = Blog::with(['user'])->where('id', $id)->first();
        // return $blog;
        $comments = Comments::with(['user'])->orderBy('id', 'desc')->where(['blog_id'=>$id])->paginate(2);

        return view('pages.view-blog', compact(['blog', 'comments']));

    }

    public function viewEvent($id, $title){
        $event = Event::with(['user'])->where('id', $id)->first();
        // return $blog;
        // $comments = Comments::with(['user'])->orderBy('id', 'desc')->where(['blog_id'=>$id])->paginate(2);

        return view('pages.view-event', compact(['event']));

    }

    public function viewNugget($id, $title){
        $nugget = Nugget::with(['user'])->where('id', $id)->first();
        // return $blog;
        // $comments = Comments::with(['user'])->orderBy('id', 'desc')->where(['blog_id'=>$id])->paginate(2);

        return view('pages.nugget', compact(['nugget']));

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

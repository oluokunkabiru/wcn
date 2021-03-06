<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comments;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comments::with(['user'])->orderBy('id', 'desc')->get();
        // return $comments;
        return view('pages.comments', compact(['comments']));
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
    public function store(CommentRequest $request)
    {
        //
        $comment = new Comments();
        $comment->blog_id = $request->blogid;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->status = 0;
        $comment->save();
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $url = route('readblog', [$comment->blog_id, str_replace(" ", '_', $comment->blog_id)]);

        Notification::send(Auth::user(), new ActivatorNofification($avatar,"comment","You added new comment", $url));

        return redirect()->back()->with('success', 'New comment added successfully');
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
                return $id;

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


        $comment = Comments::where('id', $id)->first();
        // return $comment;
        $comment->forceDelete();
        $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $url = route('readblog', [$comment->blog_id, str_replace(" ", '_', $comment->blog_id)]);

        Notification::send(Auth::user(), new ActivatorNofification($avatar,"comment","You delete your comment", $url));

          return redirect()->back()->with('success', "Comment deleted successfully");
    }
}

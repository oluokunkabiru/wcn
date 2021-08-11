<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivateMessageRequest;
use App\Models\Privatemessages;
use App\Models\User;
use App\Notifications\ActivatorNofification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class PrivateMessageMemeber extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('users.admin.messages.index');
    }
public function privateMessages($id, $name){
    // return $id;
    $messages = privateMessages::where(['sender'=> Auth::user()->id, 'user_id'=>$id])->paginate(20);
    // return $messages;
    return view('users.admin.messages.index', compact(['messages']));

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
    public function store(PrivateMessageRequest $request)
    {
        $userid = $request->userid;
        $description = $request->message;

       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/messages/" .str_replace(" ", '_', $userid)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
$user = User::where('id', $userid)->first();
       $message = new Privatemessages();
       $message->sender =Auth::user()->id;
       $message->message = $description;
       $message->user_id =$userid;
       $message->save();
       $avatar = Auth::user()->getMedia('avatar')->first()->getFullUrl('avatar');
        $url = "";//route('readblog', [$blog->id, str_replace(" ", '_', $blog->title)]);
            Notification::send($user, new ActivatorNofification($avatar,"message","You have new message", $url));
       return redirect()->route('mychat', [$user->id, str_replace(" ", '_', $user->name)])->with('success', 'Message sent successfully');


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

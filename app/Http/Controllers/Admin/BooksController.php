<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::with(['user'])->orderBy('id', 'desc')->paginate(8);
        return view('users.admin.book.index', compact(['books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $title = $request->title;
        $description = $request->content;
        libxml_use_internal_errors(true);
       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/books/" .str_replace(" ", '_', $title)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
// return $request->all();
        $book = new Book();
        $book->description = $description;
        $book->title = $title;
        $book->user_id = Auth::user()->id;
        $book->addMediaFromRequest('image')->toMediaCollection("books");
        $book->save();
        return redirect()->route('books.index')->with('success', 'New book added successfully');

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
        $book = Book::where('id', $id)->first();
        return view('users.admin.book.update', compact(['book']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, $id)
    {
        //
        $title = $request->title;
        $description = $request->content;
        libxml_use_internal_errors(true);
       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $images = $dom->getElementsByTagName('img');

       foreach($images as $k => $img){


           $data = $img->getAttribute('src');

           if (strpos($data, 'data') !== false){
            list($type, $data) = explode(';', $data);

                list($type, $data) = explode(',', $data);
                 $data = base64_decode($data);

               $image_name= "/uploads/books/" .str_replace(" ", '_', $title)."_".  time()."_".$k.'.png';

               $path = public_path() . $image_name;

               file_put_contents($path, $data);

               $img->removeAttribute('src');

               $img->setAttribute('src', $image_name);

                }

        }


       $description = $dom->saveHTML();
// return $request->all();
        $book = Book::where('id', $id)->first();
        $book->description = $description;
        $book->title = $title;
        $book->user_id = Auth::user()->id;
        if($request->file("image")){
            $book->delete($id);
            $book->clearMediaCollection();
            $book->addMediaFromRequest('image')->toMediaCollection("books");
        }
        // $book->addMediaFromRequest('image')->toMediaCollection("books");
        $book->save();
        return redirect()->route('books.index')->with('success', 'New book added successfully');

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
        $book = Book::where('id', $id)->first();
        $images = $book->getImageAll($book->description);
            if (count($images) > 0){
                foreach ($images as $image){
                    unlink(public_path().$image);
                }
            }
          $book->forceDelete();
        $book->delete($id);
        $book->clearMediaCollection();
        return redirect()->back()->with('success', "Book deleted successfully");


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];  //your empty array
         $data['books'] = Book::paginate(10);   //data from sliders table
         // $data['posts'] = Post::all();      //data from posts table
         // $data['teams'] = Team::all();      //data from teams table
         return view('/users/home',compact('data'));

        // $books = Book::orderBy('created_at', 'desc')->get();

        // return view('/users/home')->with('books', $books); 

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
             $this->validate( $request, [
            'comment'=>'required',
            'bookId'=>'required'
        ]);

           $comment = new Comment;
           $comment->comment = $request->input('comment');
           $comment->book_id = $request->input('bookId');
           $comment->save();

           return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $data = [];
        // $data['book'] = Book::find($id);   
        // $data['comments'] = Book::find($id)->comments;
        // return view('/show_book',compact('data'));


        $book = Book::find($id);
       // return dd($data);
        return view('/show_book')->with('book', $book);
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

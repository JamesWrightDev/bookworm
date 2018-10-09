<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\Review;
use App\User;
use Auth;
use Illuminate\Http\Request;

class BooksController extends Controller
{
     

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $books)
    {
        $books = Book::latest()->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Books Added Sucessfully');

        $this->validate(request(),
            [
                'title'=>'required',
                'author' => 'required',
                'description'=>'required'
            ]);

          Book::create([
            'title' => request('title'),
            'author' => request('author'),
            'description'=> request('description'),
            'bookcover' => request('bookcover')
            ]);
        
            return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book, Review $review)
    {   
    
        $reviews = $book->reviews;
        $rating = $reviews->avg('rating');
        
        

        return view('books.show', compact('book'), compact('reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        
    }
    public function readlist(Request $request)
    {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Book added to Reading List');

            Auth::user()
            ->books()
            ->attach($request->get('book_id'));
            return back();

    }
    public function markread(Request $request, Book $book)
    {
            dd();

      
    }
    
}

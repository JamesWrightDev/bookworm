<?php

namespace App\Http\Controllers;

use App\Review;
use App\Book;
use Illuminate\Http\Request;
use Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book)
    {

        return view('/reviews/create', compact('book'));
    }

       public function store(Book $book, Request $request)
    {   
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Review Added');
        
        $book_id = request('book_id');
        $this->validate(request(),
            [
            'title' => 'required',
            'body' => 'required'
            ]);
      
        Review::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'user_id'=>auth()->id(),
            'rating'=>request('rating'),
            'book_id'=>request('book_id')
        ]);
        return redirect('/books/'.$book_id);

    }

       public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review, Auth $user, Book $book)
    {

        return view('/reviews/edit', compact('review'),compact('book'), compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review, Book $book)
    {
        $review_id = request('review_id');

        $review = Review::find($review_id);

  
        
        $review->title = request('title');
        $review->body = request('body');
        $review->save();


        return redirect('/home');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Review Deleted');
        $review = Review::find($id);
        $review->delete();
        return redirect()->back();
    }
}

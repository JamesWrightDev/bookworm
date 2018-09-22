
<!-- Individual Book Pages
	- Book details
	- Reviews
 -->

@extends('layouts.app') @section('content')
    <div class="row mg-top">

        <div class="col-md-4">
        	<h2>{{ $book->title }} </h2>
            <br>
            <strong>Author: </strong><p>{{ $book->author }} </p>
            <strong>Description:</strong><p>{{ $book->description }} </p>
        </div>
        <div class="col-md-4">
            <img class="book-cover" src="{{$book->bookcover}}" alt="Dune Cover">
        </div>
    </div>
   
    <a href="/books/{{ $book-> id}}/addreview"><button class="btn btn-primary"> Add Review</button></a>
    <button class="btn btn-primary">Add to Reading List</button>
    <hr>
    <h1>Reviews</h1>
    <div>
        @foreach($book->reviews as $review)
            <article>
            <div class="row">
                <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$review->title}}</h4>
                    <p>{{$review->body}}</p>
                </div>
                
                </div>
            </div>
            
            </div>

                
            </article>
        @endforeach
    </div>
@endsection


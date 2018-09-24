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
    <form method="POST" action="/books/addlist">
     {{csrf_field()}}
    <input type="hidden" id="book_id" name="book_id" value="{{$book->id}}">
    <button class="btn btn-primary">Add to Reading List</button>
    </form>
    
    <hr>
    <h1>Reviews</h1>
    <div>
    <div class="row">
          @foreach($reviews as $review)
                  
                <div class="col-md-6 mb-3">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$review->title}}</h4>
                    <p>{{$review->body}}</p>
                    <p>Reviewed by {{$review->user->name}}, on {{ Carbon\Carbon::parse($review->created_at)->format('d/m/Y') }}</p>                  
                    </div>
                  </div>
                </div>
                          
       
        @endforeach
        </div> 
     </div>
@endsection


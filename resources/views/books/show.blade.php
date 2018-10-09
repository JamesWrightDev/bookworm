<!-- Individual Book Pages
	- Book details
	- Reviews
 -->
 @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
    {!! session('message.content') !!}
    </div>
@endif


@extends('layouts.app') @section('content')



    <div class="row mt-2">

        <div class="col-md-4">
        	<h2>{{ $book->title }} </h2>
            <br>
            <strong>Author: </strong><p>{{ $book->author }} </p>
            <strong>Description:</strong><p>{{ $book->description }} </p>
            <strong>Rating:</strong><p>{{ round($reviews->avg('rating')) }} /5 </p>
        </div>
        <div class="col-md-4">
            <img class="book-cover" src="{{$book->bookcover}}" alt="Book Cover">
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="row">
            <div class="col-md-12 mb-2">
                <a href="/books/{{ $book-> id}}/addreview"><button class="btn btn-primary"> Add Review</button></a>
            </div>
            <div class="col-md-12 mb-2">
                 <form method="POST" action="/books/addlist">
                 {{csrf_field()}}
                <input type="hidden" id="book_id" name="book_id" value="{{$book->id}}">
                <button class="btn btn-primary">Add to Reading List</button>
                </form>
            </div>
              
        </div>
    </div>
 
    
    
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
                    <p>{{$review->rating}} / 5</p>
                    <p>Reviewed by {{$review->user->name}}, on {{ Carbon\Carbon::parse($review->created_at)->format('d/m/Y') }}</p> 
                    
                    {{ Form::open(['action' =>['ReviewController@destroy', $review->id], 'method' => 'POST']) }}
                   
                        {{Form::hidden('_method','DELETE')}}
                   
                        {{ Form::submit('Remove', ['class' =>'btn btn-danger'])}}
                   
                    {{ Form::close() }}
                    <a href="/books/{{ $book-> id}}/editreview"><button class="btn btn-outline-info"> Edit Review</button></a>            
                   
                    </div>
                  </div>
                </div>
                          
       
        @endforeach
        </div> 
     </div>
@endsection


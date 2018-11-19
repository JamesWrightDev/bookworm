<!-- // User Dashboard -->

 @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
    {!! session('message.content') !!}
    </div>
@endif
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <h1>Welcome, {{ Auth::user()->name }}</h1>
            <h3>You're Reading List:</h3>
                @if(count($unreadBooks) < 1)
                        <p>You have no books in your reading list, click <a href="/books">here</a>  to browse books. </p>
                    @endif
                @foreach($unreadBooks as $book)
                <div class="row mb-2">

                    <div class="col-md-6"><h4><a href="/books/{{$book->id}}">{{$book->title}}</a></h4></div>
                    <div class="col-md-2">
                        <form action="/books/markread" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" id="book_id" name="book_id" value="{{$book->id}}">
                        <button class="btn btn-sm btn-outline-success">Mark As Read</button>
                        </form>
                    </div>
                </div>
                @endforeach
                <h3>You're completed Books</h3>
                @foreach($completedBooks as $book)
                <div class="row mb-2">
                    <div class="col-md-6"><h4><a href="/books/{{$book->id}}">{{$book->title}}</a></h4></div>
                    <div class="col-md-6">
                        <a href="/books/{{$book->id}}/addreview"><button class="btn btn-sm btn-outline-info">Leave A Review</button></a></div>
                </div>
                @endforeach                
           
    </div>
</div>
@endsection

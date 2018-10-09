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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                
            </div>
            <h1>Welcome back, {{ Auth::user()->name }}</h1>
            <h3>You're Reading List:</h3>
           
               
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
                    <div class="col-md-2">
                        <a href="/books/{{$book->id}}/addreview"><button class="btn btn-sm btn-outline-info">Leave A Review</button></a></div>
                </div>
                @endforeach                
           
    </div>
</div>
@endsection

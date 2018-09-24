<!-- // User Dashboard -->
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
           
         
                @foreach($books as $book)
                <div class="row">
                    <div class="col-md-6"><h2><a href="/books/{{$book->id}}">{{$book->title}}</a></h2></div>
                    <div class="col-md-2"><button class="btn btn-danger">Mark As Read</button></div>
                </div>
                @endforeach
                
           
    </div>
</div>
@endsection

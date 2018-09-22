@extends('layouts.app')

@section('content')


<div class="col-md-8">
	<h1>Add a Review for {{$book->title}}</h1>
	<form method="POST" action="/books/addreview">
		{{csrf_field()}}
		<input type="hidden" id="book_id" name="book_id" value="{{$book->id}}">
		<div class="form-group">
			<label for="title">Title </label>
			<input class="form-control" type="text" name="title" id="title">
		</div>
		<div class="form-group">
			<label for="body">Review:</label>
			<textarea class="form-control" name="body" id="body" ></textarea>
		<div class="form-group">
		 	 <button type="submit" class="btn btn-primary">Add Review</button>
		  </div>
		
	</form>
</div>

@endsection
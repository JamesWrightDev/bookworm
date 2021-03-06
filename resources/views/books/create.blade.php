@extends('layouts.app')

@section('content')


<div class="col-md-8">
	<h1>Add a book</h1>
	<form method="POST" action="/books" enctype='multipart/form-data'>
		{{csrf_field()}}
		
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title">
		</div>
		<div class="form-group">
			<label for="title">Author</label>
			<input class="form-control" type="text" name="author" id="author">
		</div>
		<div class="form-group">
			<label for="title">Description:</label>
			<textarea class="form-control" name="description" id="description" ></textarea>
		</div>
		<div class="form-group">
			<label for="bookcover">Cover URL</label>
			<input class="form-control" type="text" name="bookcover" id="bookcover" placeholder="Paste in the URL here!">
		</div>
		<div class="form-group">
		 	 <button type="submit" class="btn btn-primary">Add Book</button>
		  </div>
		

	</form>
</div>

@endsection
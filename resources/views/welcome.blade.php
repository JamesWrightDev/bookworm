@extends('layouts.app')
@section('landing')

<!-- HOME PAGE -->
	<div class="row">
		<div class="col-md-12">
{{-- 			<div class="splash-image">

				<img src="{{ asset('img/landing_page-min.jpg') }}" alt="" class='img-fluid'>
			</div> --}}
			<div class="jumbotron">
			  <h1 class="display-4">Welcome to BookWorm!</h1>
			  <p class="lead">The home of book-lovers.</p>
			  <a class="btn btn-primary btn-lg" href="/register" role="button">Create Account</a>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-4 text-center mt-4">
			<div class="card">
				<div class="card-img-top">
					<img class='home-icon' 
					src="{{asset('img/book.svg')}}" alt="">
				</div>
				<div class="card-body">
					<p class="card-text h4">Discover Books</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 text-center mt-4">
			<div class="card">
				<div class="card-img-top">
					<img class='home-icon' src="{{asset('img/review.svg')}}" alt="">
				</div>
				<div class="card-body">
					<p class="card-text h4">Leave Reviews</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 text-center mt-4">
			<div class="card">
				<div class="card-img-top">
					<img class='home-icon' src="{{asset('img/list.svg')}}" alt="">
				</div>
				<div class="card-body">
					<p class="card-text h4">Reading Lists</p>
				</div>
			</div>
		</div>
	</div>




@endsection
@extends('layouts.app')
@section('landing')

<!-- HOME PAGE -->

<div class="jumbotron d-flex align-items-center">
		<div class='horizontal-center'>
				<div class="row">
						<div class="col-md-12">
								<h1 class="landing-h1 text-center ">Welcome to BookWorm!</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 d-flex justify-content-center ">
								
						<a class="nav-link btn btn-primary mr-3" href="{{ route('register') }}">Get Started</a>
						</div>
					</div>
		</div>
			
							
	</div>

			
@endsection
@extends ('layout')

@section ('content')

	<div class="row">
		<div class="col-md-12">
		
			<div class="jumbotron">
				<div class="container">
					<h1>Welcome to GroupPay!</h1>
					<p><i>The easiest way to split the bill!</i> - GroupPay is a simple dashboard to help you and your
					friends track expenses and pay the bill evenly!</p>
					<p>
						<a href="#" class="btn btn-primary btn-lg">Learn More!</a>
						or
						<a href="{{ URL::to('login') }}">login</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h3>
					See what people are saying:
				</h3>
			</div>
		</div>
	</div>
	
	<div class="row">
	
		<div class="col-md-6">
			
			<blockquote>
				<p>"The easiest way to split the bill!"</p>
				<small>Jordan Foreman</small>
			</blockquote>
	
		</div>
	
		<div class="col-md-6">
			
			<blockquote>
				<p>"OMG! This is totally ridiculous!"</p>
				<small>also Jordan Foreman</small>
			</blockquote>
	
		</div>
	</div>

@stop
@extends('public_layout')

@section('content')

	<div class="row">
	
		<div class="well">

			{{ Form::open(array('url'=>'login', 'method'=>'post')) }}
	
				<!-- check for login errors flash var -->
				@if (Session::has('login_errors'))
					<div class="alert alert-danger">Username or password incorrect.</div>
				@endif
	
				<!-- username field -->
				<div class="form-group">
					<p>{{ Form::label('email', 'Email') }}</p>
					<p>{{ Form::text('email', null, ['class'=>'form-control', 'required']) }}</p>
				</div>
	
				<!-- password field -->
				<div class="form-group">
					<p>{{ Form::label('password', 'Password') }}</p>
					<p>{{ Form::password('password', ['class'=>'form-control']) }}</p>
				</div>
	
				<!-- submit button -->
				<p>
					{{ Form::submit('Login', ['class'=>'btn btn-default']) }}
					<a href="register" class="btn btn-primary">Register</a>
				</p>
	
			{{ Form::close() }}
		
		</div>

	</div>
	
@stop
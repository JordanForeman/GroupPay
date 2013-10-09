@extends ('layout')

@section ('content')

	<div class="row">
		
		<div class="col-md-12">
			
			<div class="well">
			
				{{ Form::open(array('url'=>'register', 'method'=>'post')) }}
			
				<!-- username field -->
				<div class="form-group">
					<p>{{ Form::label('email', 'Email') }}</p>
					<p>{{ Form::text('email', null, ['class'=>'form-control', 'required']) }}</p>
				</div>
				
				<!-- name field -->
				<div class="form-group">
					<p>{{ Form::label('name', 'Name') }}</p>
					<p>{{ Form::text('name', null, ['class'=>'form-control']) }}</p>
				</div>
	
				<!-- password field -->
				<div class="form-group">
					<p>{{ Form::label('password', 'Password') }}</p>
					<p>{{ Form::password('password', ['class'=>'form-control']) }}</p>
				</div>
			
				<!-- confirm password field -->
				<div class="form-group">
					<p>{{ Form::label('confirmPassword', 'Confirm Password') }}</p>
					<p>{{ Form::password('confirmPassword', ['class'=>'form-control']) }}</p>
				</div>
			
				<!-- submit button -->
				<p>{{ Form::submit('Register', ['class'=>'btn btn-default']) }}</p>
			
				{{ Form::close() }}
			
			</div>
			
		</div>
	
	</div>

@stop
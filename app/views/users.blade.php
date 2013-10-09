@extends('layout')

@section('content')

	<div class="container">

		<div class="page-header">
			<h1>Users</h1>
		</div>

		<div class="row">
			<div class="col-md-12">

				<table class="table table-striped">

					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>email</th>
							<th>&nbsp;</th>
						</tr>
					</thead>

					<tbody>

					@foreach($users as $user)

						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
							<!-- Implement Deleting of Users -->
							<td><a href="{{ URL::to('users') }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to do that? Deleting a user cannot be undone!');"><i class="glyphicon glyphicon-trash"></i>&nbsp; Delete User</a></td>
						</tr>

					@endforeach

					</tbody>

				</table>
			</div>
		</div>
				
		<div class="page-header">
			<h3>Add User</h3>
		</div>
				
			<div class="row">
				
				{{ Form::open(array('url'=>'users', 'method'=>'post')) }}
				
				<div class="col-md-3">
				
					<!-- email field -->
					<div class="form-group">
						<div class="input-group"><span class="input-group-addon">Email</span>
						{{ Form::text('email', null, ['class'=>'form-control', 'required']) }}</div>
					</div>
					
				</div>
				
				<div class="col-md-4">
					<!-- name field -->
					<div class="form-group">
						<div class="input-group"><span class="input-group-addon">Name</span>
						{{ Form::text('name', null, ['class'=>'form-control', 'required']) }}</div>
					</div>
				</div>
				
				<div class="col-md-3">
					<!-- password field -->
					<div class="form-group">
						<div class="input-group"><span class="input-group-addon">Password</span>
						{{ Form::password('password', ['class'=>'form-control', 'required']) }}</div>
					</div>
				</div>
				
				<div class="col-md-1">
					<!-- submit button -->
					<p>{{ Form::submit('Add User', ['class'=>'btn btn-default']) }}</p>
				</div>
				
				{{ Form::close() }}

			</div>
		</div>

	</div>

@stop
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
						</tr>
					</thead>

					<tbody>

					@foreach($users as $user)

						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
						</tr>

					@endforeach

					</tbody>

				</table>

			</div>
		</div>

	</div>

@stop
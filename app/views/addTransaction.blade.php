@extends('layout')

@section('content')
	
	<div class="row">
	
	{{ Form::open(array('url' => 'addTransaction')) }}
	<ul>
		<div class="form-group">
			<p>{{ Form::label('group_id', 'Group id:') }}</p>
			<p>{{ Form::text('group_id', null, ['class'=>'form-control', 'required']) }}</p>
		</div>

		<div class="form-group">
			<p>{{ Form::label('description', 'Description:') }}</p>
			<p>{{ Form::textarea('description', null, ['class'=>'form-control']) }}</p>
		</div>

		<div class="form-group">
			<p>{{ Form::label('amount', 'Amount:') }}</p>
			<p>{{ Form::text('amount', null, ['class'=>'form-control', 'required']) }}</p>
		</div>

		<div class="form-group">
			<p>{{ Form::submit('Create', ['class'=>'btn btn-default']) }}</p>
		</div>
	</ul>
	{{ Form::close() }}
	
	</div>

@stop
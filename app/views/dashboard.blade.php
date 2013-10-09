@extends ('layout')

@section ('content')

<div class="row">
	<p>This is the Dashboard, beeotches!</p>
</div>

<div class="row">
	<div class="left-sidebar col-md-4">
		<img src="http://placehold.it/200/200" />
		<h1>{{ Auth::user()->name }}</h1>
		
		<div class="">
			<a href="#" class="btn btn-success">+ Add Transaction</a>
			<a href="#" class="btn btn-info"><i class="glyphicon glyphicon-euro"></i> Pay Balance</a>
		</div>
	</div>
	
	<div class="feed col-md-8">
		
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="http://placehold.it/45/45" alt="" />
			</a>
			<div class="media-body">
				<h4 class="media-heading">Test User1 add a transaction</h4>
				<p style="color: red;">Media content goes here</p>
			</div>
		</div>
		
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="http://placehold.it/45/45" alt="" />
			</a>
			<div class="media-body">
				<h4 class="media-heading">Test User1 add a transaction</h4>
				<p style="color: red;">Media content goes here</p>
			</div>
		</div>
		
	</div>
</div>

@stop
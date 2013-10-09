<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GroupPay - The Easiest Way to Split the Bill</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="css/style.css">
		<style>
			body
			{
				padding-top: 70px;
			}
		</style>
	</head>

	<body>

		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<a class="navbar-brand" href="{{ URL::to('/') }}">GroupPay</a>
			
			<nav>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
					 	
					 	@if (Auth::check())
						 	<li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
						 	
							@if (Auth::user()->role == "admin")
								<!-- ADMIN OPTIONS -->
								<li class="dropdown">
									
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="glyphicon glyphicon-lock"></i>
										Admin
										<b class="caret"></b>
									</a>
									
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ URL::to('users'); }}">Manage Users</a></li>
									</ul>
									
								</li>
							@endif
							
							<!-- USER OPTIONS -->
							<li class="dropdown">
								
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="glyphicon glyphicon-user"></i>
									{{ Auth::user()->name }}
									<b class="caret"></b>
								</a>
								
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Account</a></li>
									<li><a href="{{ URL::to('logout'); }}">Logout</a></li>
								</ul>
								
							</li>
							
						@else
							<li><a href="{{ URL::to('login') }}">Login</a></li>
						@endif
					</ul>
				</div>
			</nav>
			
		</div>
		
		<div class="container">
		
			@yield('content')
		
		</div>
		
	</body>
</html>
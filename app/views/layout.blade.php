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
			
			html,
			body {
				height: 100%;
				/* The html and body elements cannot have any padding or margin. */
			}
			
			/* Wrapper for page content to push down footer */
			#wrap {
				min-height: 100%;
				height: auto !important;
				height: 100%;
				/* Negative indent footer by it's height */
				margin: 0 auto -60px;
			}
			
			/* Set the fixed height of the footer here */
			#push,
			#footer 
			{
				height: 60px;
			}
			#footer 
			{
				background-color: #f5f5f5;
			}
			
			.credit
			{
				line-height: 60px;
			}
		</style>
	</head>

	<body>

		<div id="wrap">

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
		<div id="push"></div>
		
		</div>
		
		<div id="footer">
			<div class="container">
				<p class="muted credit">GroupPay copyright &copy; 2013 by <a href="http://jordanforeman.com">Jordan Foreman</a></p>
			</div>
		</div>
		
	</body>
</html>
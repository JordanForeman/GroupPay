<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GroupPay - The Easiest Way to Split the Bill</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
			<a class="navbar-brand" href="#">Laravel Quickstart</a>
			
			<nav>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
					 	<!-- TODO: Fix user dropdown -->
					 	<li><a href="{{ URL::to('logout') }}">Logout</a></li>
						<!--
						<li class="dropdown">
							
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								User Name <!-- TODO: get from session --/>
								<b class="caret"></b>
							</a>
							
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ URL::to('logout'); }}">Logout</a></li>
							</ul>
							
						</li>
						-->
					</ul>
				</div>
			</nav>
			
		</div>
		
		<div class="container">
		
			@yield('content')
		
		</div>
		
	</body>
</html>
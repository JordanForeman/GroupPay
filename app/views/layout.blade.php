<!DOCTYPE html>
<html lang="en">
	<head>
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
		</div>

		@yield('content')
	</body>
</html>
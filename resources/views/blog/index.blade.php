<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bs5/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="">
	<title>Testing</title>
	<script type="text/javascript" src="{{ asset('bs5/js/bootstrap.min.js') }}"></script>
	<style type="text/css">
		section{
			background:linear-gradient(90deg, #f5f5f5, #ff00);
			height: 1000px;
		}
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg p-3" style="background-color: lightblue;">
			<a class="navbar-brand" href="#">
				AboutMe
			</a>
			<button type="button" class="navbar-toggler" data-target="#mynav" data-toggle="collapse" aria-expanded="false" aria-controls="mynav" aria-label="Toggle Navigation"><span class="navbar-toggler-icon"></span></button>

			<div class="collapse navbar-collapse" id="mynav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Dropdown
				          </a>
				          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
				            <li><a class="dropdown-item" href="#">Action</a></li>
				            <li><a class="dropdown-item" href="#">Another action</a></li>
				            <li><a class="dropdown-item" href="#">Something else here</a></li>
				          </ul>						
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<section>
		
	</section>
</body>
</html>
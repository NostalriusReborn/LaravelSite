<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<title>Nostalrius Reborn</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href=" {{ elixir('css/all.css') }} " type="text/css">
	<!-- 	Typical page specific header content -->
	@yield('head')
</head>
<body>
		<header class="nav">
			<h1 class="nav-title"><a href="">Nostalrius Reborn</a></h1>
			<ul class="main-nav">
				<li class="nav-item"><a href="http://nostalrius-reborn.org/forum/">Forum</a></li>
				<li class="nav-item"><a href="http://nostalrius-reborn.org/forum/viewtopic.php?f=4&t=162&sid=4053cf4f30c0d35feebf47b779e688e3">F.A.Q</a></li>
				<li class="nav-item"><a href="#">Armory</a></li>
				<li class="nav-item"><a href="/register">Login | Register</a></li>
			</ul>
		</header>
		<div class="main-header" data-parallax="scroll" data-image-src="{{ asset('img/elwynn.jpg') }}">
				<a class="centered"href="http://nostalrius-reborn.orghttp://nostalrius-reborn.org"><img class="main-logo"src="img/wow-emblem.svg"></a>
				<a class="centered"href="http://nostalrius-reborn.org"><h1 class="header-title">Nostalrius Reborn</h1></a>
		</div>
		<!-- 	Main page content -->
		<div class="content">
		@yield('content')
		</div>
	<footer class="footer">
		<span style="color: #907F7F;">&copy; 2016 Vanilla.re </span>
	</footer>
<!-- 	Javascript and such -->
	<script type="text/javascript" src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
	<script type="text/javascript" src=" {{ asset('js/form.min.js') }} "></script>
	@yield('footer')
</body>
</html>
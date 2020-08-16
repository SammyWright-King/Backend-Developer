<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Balay Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('csss/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('csss/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('csss/bootstrap.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('csss/flexslider.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('csss/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('csss/owl.theme.default.min.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('csss/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('jss/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="{{ route('index') }}">Stack<br> Overflow</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="{{ route('index') }}">Home</a></li>
					<li><a href="work.html">Project</a></li>
					<li><a href="{{ url('/about') }}">About</a></li>
					<li><a href="{{ url('/services') }}">Services</a></li>
					<li><a href="{{ url('/blog') }}">Blog</a></li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<small>SammyWright_King</small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>
		</aside>
		@yield('content')
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('jss/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('jss/jquery.easing.1.3.js') }}"></script>') }}
	<!-- Bootstrap -->
	<script src="{{ asset('jss/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('jss/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('jss/jquery.flexslider-min.js') }}"></script>
	<!-- Sticky Kit -->
	<script src="{{ asset('jss/sticky-kit.min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('jss/owl.carousel.min.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('jss/jquery.countTo.js') }}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{ asset('jss/main.js') }}"></script>

	</body>
</html>


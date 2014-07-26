<!DOCTYPE html>
<html lang="en"> 
	<head>
		<meta charset="utf-8"/>
		@yield('header_info')
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="keywords" content="web developer,san antonio,wordpress,wordpress template,php developer, laravel developer, freelance, freelance developer, front-end developer"/>
		@section('description')
		<meta name="description" content="San Antonio based web developer with 9 years of experience and counting. Available for freelance and full-time."/>
		@show
		<title>@yield('pageTitle')Mike Hopkins Multimedia</title>
		<link rel="stylesheet" href="/_css/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/_css/media.css" type="text/css" media="screen" />
		
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'/>
		<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'/>
		<link rel="shortcut icon" href="/favicon.ico?v=2" />
		@yield('styles')
		
		<script type="text/javascript" charset="utf-8" src="/_js/jquery.min.js"></script>
	</head>
	<body>
		<div id="grid-960" class="initial-hide"></div>
		@section('intro')
		<div class='intro-container subpage'>
			<a href="/"><h2 class="subpage-header">Mike Hopkins - Multimedia / Web Developer</h2></a>
		</div>
		@show
		<nav id="nav-container">
			<div class="mobile-nav">
				<p><a href="/">Mike Hopkins<br />Multimedia / Web Developer</a></p>
				<a href="#" class="mobile-nav-toggle"><img src="/_images/icon-menu.png" alt="mobile navigaiton toggle"/></a>
			</div>
			<div class="navigation">
				<ul class="navList">
					<li><a href="/projects" class="top-nav" id="all-up-nav">All Projects</a></li>
					<li><a href="/projects/flash" class="top-nav" id="flash-nav">Flash</a></li>
					<li><a href="/projects/html" class="top-nav" id="html-nav">HTML, jQuery &amp;&nbsp;CSS</a></li>
					<li><a href="/projects/php" class="top-nav" id="php-nav">PHP &amp; Wordpress</a></li>
					<li><a href="/projects/misc" class="top-nav" id="misc-nav">Misc.</a></li>
					<li id="grid-960-nav"><a href="#" id="grid-nav">960 Grid</a></li>
					<li><a href="/resume" class="resume-nav" id="resume-nav">R&eacute;sum&eacute;</a></li>
				</ul>
			</div>
		</nav>
		<section class="main-content project-content">
	        @yield('content')
		</section>
		<footer id="footer-container">
			<div class="footer-things">
				<div class="contact-info">
					<h3>Contact</h3>
					<p><a href="/contact">Contact Form</a><br />
						<a href="tel:2145381033">214.538.1033</a><br />
						<a href="http://www.linkedin.com/in/mikehopkinsmm/" target="_blank">Mike Hopkins MM on LinkedIn</a>
					</p>
				</div>
				<div class="copyright-info">
					<h3>Copyright</h3>
					<p>&copy;2014&nbsp;Michael&nbsp;Hopkins | <em>DBA&nbsp;Mike&nbsp;Hopkins&nbsp;Multimedia</em><br />
						Creative assets are owned by their respective content creators and are subject to the appropriate copyright laws.</p>
				</div>
			</div>
		</footer>
		<div id="contact-container">
			<div class="footer-things">
				<p><span class="contact-anchor anchor-email"><a href="/contact">Contact Form</a></span><span class="span-pipe"> | </span><span class="contact-anchor anchor-phone"><a href="tel:2145381033">214.538.1033</a></span><span class="span-pipe"> | </span><span class="contact-anchor anchor-linkedin"><a href="http://www.linkedin.com/in/mikehopkinsmm/" target="_blank">Mike Hopkins MM on LinkedIn</a></span></p>
			</div>

		<script type="text/javascript" charset="utf-8" src="/_js/jquery.header.js"></script>
		@yield('scripts')
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-39687444-1', 'mikehopkinsmm.com');
		  ga('send', 'pageview');

		</script>
		</div>
	</body>
</html>
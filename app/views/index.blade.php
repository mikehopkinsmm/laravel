@extends('layouts.master')


@section('header_info')
	<meta property="og:title" content="Mike Hopkins Multimedia" />
	<meta property="og:description" content="Resume and Projects for Mike Hopkins DBA Mike Hopkins Multimedia" />
@stop
@section('scripts')
	<script type="text/javascript" charset="utf-8" src="./_js/jquery.intro.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
@stop

@section('intro')
<div class="intro-container">
	<div class="intro-header-container">
		<h2 id="introHeader">Mike Hopkins</h2>
		<ul id="introList">
			<li class="intro-text" id="phpIntroText">PHP / Wordpress</li>
			<li class="intro-text" id="htmlIntroText">HTML / jQuery / CSS3</li>
			<li class="intro-text" id="flashIntroText">Flash</li>
			<li class="intro-text" id="mmIntroText">Multimedia / Web</li>
		</ul>
		<h2 class="intro-text dev-text" id="devIntroText">Developer</h2>
	</div>
	<div class="intro-background-container">
		<ul id="introBackgrounds">
			<li class="intro-background" id="introBackgroundOne">
				<img src="/_images/homepage/jquery.jpg" width="960" height="500" alt="Intro animation background">
			</li>
			<li class="intro-background" id="introBackgroundTwo">
				<img src="/_images/homepage/wordpress.jpg" width="960" height="500" alt="Intro animation background">
			</li>
			<li class="intro-background" id="introBackgroundThree">
				<img src="/_images/homepage/flash.jpg" width="960" height="500" alt="Intro animation background">
			</li>
		</ul>
	</div>
</div>
@stop

@section('content')
<h1>Mike Hopkins Multimedia - Featured Projects</h1>
<?php
	$rs = DB::table('portfolio_items')->where('featured','1')->where('active','1')->orderBy(DB::raw('RAND()'))->take(6)->get();
?>
	@foreach ($rs as $item)
		<article class='portfolio-item {{ $item->type }}-project'>
			<header><h2 class="hide-me">{{ $item->title }}</h2></header>
			<span class="icon-image">
				<a class="project-link id-{{ $item->short_name }}" href="project/{{ $item->short_name }}">
					<img src='/_images/_icons/{{ $item->short_name }}.{{ $item->icon_type }}' width="298" height="148" alt="{{ $item->short_name }}-project-thumbnail"/>
				</a>
			</span>
			<br />
			<p class='title'>
				<a class="project-link id-{{ $item->short_name }}" href="project/{{ $item->short_name }}">
					{{ $item->title }}
				</a>
			</p>
			<div class='description'>
				<p>{{ $item->description }}</p>
			</div>
		</article>
	@endforeach
@stop
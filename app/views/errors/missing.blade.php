@extends('layouts.master')

@section('styles')

	<link rel="stylesheet" href="/_css/print.css" type="text/css" media="print" />

@stop
@section('content')
	<h1>404 - Something Broke!</h1>
	<div style="margin-left:10px;margin-right:10px;">
		<p>We couldn't find the page you're trying to get to!</p>
		<p>Click one of the main navigation items to get back on track, or you can browse a random project below.</p>
	</div>
	<?php
	if(Auth::check()){
		$rs = DB::table('portfolio_items')->orderBy(DB::raw('RAND()'))->take(6)->get();
	}else{
		$rs = DB::table('portfolio_items')->where('active', '1')->orderBy(DB::raw('RAND()'))->take(6)->get();
	}
		
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

@section('pageTitle')
	{{"404 -" }} @stop

@section('description')
	<meta name="description" content="404 error page"/>
@stop
@extends('layouts.master')

@section('content')
<div class="breadcrumbs">
<ul>
	@if ( $heading != "All")
	<li><a href="/projects">All Projects</a></li>
	<li>></li>
	<li>{{ $heading }} Projects</li>
	@endif
</ul>
</div>
	<h1>{{ $heading }} Projects</h1>
	@foreach ($rs as $item)
	   	<article class='portfolio-item {{ $item->type }}-project'>
			<header>
				<h2 class="hide-me">{{ $item->title }}</h2>
			</header>
	   		<a class="project-link id-{{ $item->short_name }}" href="/projects/{{ $item->type }}/{{ $item->short_name }}">
	   			<span class="icon-image">
					<img src='/_images/_icons/{{ $item->short_name }}.{{ $item->icon_type }}' width="298" height="148" alt="{{ $item->short_name }}-project-thumbnail"/>
				</span>
				<br />
	   			<p class='title'>
					{{ $item->title }}
				</p>
			</a>
			<div class='description'>
				<p>{{ $item->description }}</p>
			</div>
		</article>
	@endforeach
@stop

@section('pageTitle')
{{ $heading }} Projects -
@stop
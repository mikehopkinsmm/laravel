@extends('layouts.master')

@section('content')
<header><h2 class="hide-me">{{ $item->title }} Project Details</h2></header>

	<div class="breadcrumbs">
			<ul>
				<li><a href="/projects">All Projects</a></li>
				<li>></li>
				<li><a href="/projects/{{ $title->reference_name }}">{{ $title->display_name }} Projects</a></li>
				<li>></li>
				<li>{{ $item->title }}</li>
			</ul>
	</div>
	<article class="project-detail">
		<header><h2 class="title">{{ $item->title }}</h2></header>
		<img class="project-thumbnail" src="/_images/_icons/{{ $item->short_name }}.{{ $item->icon_type }}" width="298" height="148" alt="Thumbnail for {{ $item->short_name }} project"/>
		<div class="description">
			{{ $item->body }}</div>
	</article>
@stop
@section('styles')
	@if ($item->hasStyle == 1)
	<link rel="stylesheet" href="/_css/projectSpecific/{{ $item->short_name }}.css" type="text/css" media="screen" />
	@endif
@stop
@section('pageTitle')
{{str_limit($item->title,24,"")}} - @stop
@section('description')
<meta name="description" content="{{ $item->description }}"/>
@stop
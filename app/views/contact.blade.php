@extends('layouts.master')

@section('styles')


@stop
@section('pageTitle')
Contact - 
@stop
@section('content')
	<div id="contact-form-container">
		<h1>Send Me a Message</h1>
		<p>If you have any questions, comments, or requests, please fill out the form below and I will respond as soon as I can!</p>
<!--		<p>If you would like a quote on a job, please include a description of the project and attach any PDF or JPG storyboards.</p>-->
		{{ Form:: open(array('url' => 'contact')) }}
		
		
		
		@if (count($errors) > 0) 
		<ul class="errors ccHasMessage">
			@foreach($errors->all('<li>:message</li>') as $message)
			{{ $message }}
			@endforeach
		</ul>
		@endif
		<?php 
			$message = Session::get('message');
		?>
		@if (isSet($message))
		    <p class="ccHasMessage">{{ $message }}</p>
		@else
		@endif
		<div class="contactColumn ccLeft">
			<span class="input-label">{{ Form::label ('name', 'Name*' ) }}</span>
			<span class="input-field">{{ Form::text('name', Input::old('name')) }}</span>
			<span class="input-label">{{ Form::label ('email', 'E-mail Address*') }}</span>
			<span class="input-field">{{ Form::text('email', Input::old('email')) }}</span>
		</div>
		<div class="contactColumn ccRight">
			<span class="input-label">{{ Form::label ('phone', 'Phone Number' ) }}</span>
			<span class="input-field">{{ Form::text('phone', Input::old('phone')) }}</span>
			<span class="input-label">{{ Form::label ('company', 'Company') }}</span>
			<span class="input-field">{{ Form::text('company', Input::old('company')) }}</span>
		</div>
		<div class="contactColumn ccFullWidth">
			<span class="input-label">{{ Form::label ('message', 'Message*' ) }}</span>
			<span class="input-field">{{ Form::textarea('message', Input::old('message')) }}</span>
		{{ Form::hidden ('misc', '') }}
		<p>* required field.</p>
		{{ Form::submit('Send', array('class' => 'button-send')) }}
		{{ Form::reset('Clear', array('class' => 'button-clear')) }}
		</div>
		{{ Form:: close() }}
	</div>
@stop
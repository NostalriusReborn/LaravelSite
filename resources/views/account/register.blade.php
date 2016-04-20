@extends('layout')
@section('head')
@stop
@section('content')
<div class="row">
	<div class="col register">
		@if (isset($registerErrors[0]))
		<h1>Error:</h1>
		<ul class="list">
			@foreach ($registerErrors as $error)
			<li class="list-item"> {!! $error !!} </li>
			@endforeach
		</ul>
		@endif
		<h1>Register</h1>
		<form class="ui form" action="/account/create" method="POST">
		{{ csrf_field() }} 
			<div class="field">
			 	<h3>Username:</h3>
				<input type="text" name="username" required>
			</div>
			<div class="field">
				<h3>Password:</h3>
				<input type="password" name="password[]" required>
			</div>
			<div class="field">
				<h3>Password Confirmation</h3>
				<input type="password" name="password[]" required>
			</div>
			<button class="ui button" action="submit">Register Account</button>
		</form>
	</div>
	<div class="col">
		<h1>Note:</h1>
		<ul class="list">
			<li class="list-item">This is a Beta Realm</li>
			<li class="list-item">You don't need to enter your old Nostralius account information!</li>
			<li class="list-item">Your Nostalrius characters won't be available earlier than 30th of April.</li>
			<li class="list-item">This Beta Realm doesn't meet the quality standards of Nostalrius until we have the Nostalrius data. Our goal stays the same.</li>
			<li class="list-item">You will be able to migrate your beta characters to the main realm when it is set up.</li>
			<li class="list-item">In order to play on the Beta Realm you need to set your realmlist to "set realmlist logon.nostalrius-reborn.org"</li>
		</ul>
	</div>
</div>
@stop
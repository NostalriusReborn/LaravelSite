@extends('layout')
@section('head')
@stop
@section('content')
@if (isset($status))
	<div class="row">
		<div class="col">
			<h1 class="col-title">Account Created!</h1>
		</div>
	</div>
@endif
<div class="row">
	<div class="col">
		<h1 class="col-title">Connection Guide</h1>
		<p>Connecting to our server is very easy. We've written a small guide to help players who aren't very tech savy to connect without any problems. Underneath you will also find some common issue's that you might encounter.</p>

		<h2 class="col-title">World of Warcraft 1.12 Client</h2>
		<p>First you need the proper client version, since we are trying to replicate the Nostalrius experience their Client would do just fine. Which you can find <a href="http://forum.nostalrius.org/viewtopic.php?f=32&t=2803"> here</a>.</p>

		<h2 class="col-title">Setting your realmlist</h2>
		<p>After downloading the client, and after installing it you will have to set your realmlist to match our host. Otherwise it won't know which server to connect to. Luckily this is quite easy, find your realmlist.wtf file in the root (main) folder of your installation. and change the text to:</p>
		<h3 class="col-title">"set realmlist logon.nostalrius-reborn.org"</h3>
		<p>Without the Quotes! After that you should be all set!</p>

		<h2 class="col-title">Common problems</h2>
		<ul class="list">
			<li class="list-item">
				<h3 class="col-title">Setting the realmlist won't work</h3>
				<p>Try replacing logon.vanilla-servers.org in your realmist with 149.202.143.230 . Do keep in mind, this is a temporary fix.</p>
			</li>
			<li class="list-item">
				<h3 class="col-title"> Invalid target while In-Game</h3>
				<p>This issue is caused by the WDB folder in your installation. Try deleting it and it should work again.</p>
			</li>
		</ul>
		<h2 class="col-title">If you have any other problems, feel free to leave them at the forum. We'll help you as soon as we can.</h2>
	</div>
</div>
@stop
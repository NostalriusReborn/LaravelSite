@extends('layout')
@section('head')
@stop
@section('content')
	<div class="row-logo">
		<a href="">
			<div class="col-logo">
				<div class="svg"> {!! $svg[0]->item(0)->C14N() !!}</div>
				<h2 class="col-title">Play</h2>
				<h3 class="col-subtitle">Work in Progress</h3>
			</div>
		</a>
			<hr class="mobile-hr">
		<a href="http://nostalrius-reborn.org/forum/">
			<div class="col-logo">
				<div class="svg"> {!! $svg[1]->item(0)->C14N() !!}</div>
				<h2 class="col-title">Forum</h2>
				<h3 class="col-subtitle">Join the conversation!</h3>
			</div>
		</a>
			<hr class="mobile-hr">
		<a href="">
			<div class="col-logo">
				<div class="svg"> {!! $svg[2]->item(0)->C14N() !!}</div>
				<h2 class="col-title">Features</h2>
				<h3 class="col-subtitle">Blizzlike EXP rates, active staff and more!</h3>
			</div>
		</a>
	</div>
	
	<div class="row">
		<div class="col"> 
			<h1 class="title">We are Nostalrius Reborn</h1>
			<h2>Aiming to provide an experience similar to the previously shut down Nostalrius server, we have created Vanilla WoW 1.12 server for people seeking the same features that Nostalrius had. Quality gameplay for our players is what we strive for.</h2>
		</div>
		<div class="col">
			<h1 class="title">Getting better every day</h1>
			<h2>Our developer team works daily to prevent players from encountering bugs. They are dedicated to finding and fixing bugs on our realm. We have a priority list dedicated to bringing all our players the best experience we have to offer, with most of the dungeons already working properly. Ofcourse this could not be achieved without our active community helping us find bugs.</h2>
			</div>
		</div>
	</div>
@stop
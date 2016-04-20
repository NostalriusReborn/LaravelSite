@extends('layout')
@section('head')
@stop
@section('content')
	<div class="row-logo">
		<a href="/register">
			<div class="col-logo">
				<div class="svg"> {!! $svg[0]->item(0)->C14N() !!}</div>
				<h2 class="col-title">Play</h2>
				<h3 class="col-subtitle">Register your account here!</h3>
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
		<a href="#Features">
			<div class="col-logo">
				<div class="svg"> {!! $svg[2]->item(0)->C14N() !!}</div>
				<h2 class="col-title">Features</h2>
				<h3 class="col-subtitle">Blizzlike EXP rates, active staff and more!</h3>
			</div>
		</a>
	</div>
	<div id="Features" class="parallax" data-parallax="scroll" data-image-src="{{ asset('img/orcVsHuman.jpg') }}"></div>
	<div class="row">
		<div class="col">
			<h2 class="col-title">Our goal: making you happy</h2>
			<p>We are dedicated to provide the best we can for our community. As is listed on the features list we will provide our realm with daily bug fixes and active GM support for any issue's you might encounter while playing. Our community has already created guilds to play together in, there's also word going around about wars between guilds. We are all very excited to see what the future of this private server will bring us. Try it out!</p>
		</div>
		<div class="col" style="padding-left: 20%">
		<h2 class="col-title">Features</h2>
			<ul class="list">
				<li class="list-item">1x Exp Rates</li>
				<li class="list-item">No vote/donator shop</li>
				<li class="list-item">Active community!</li>
				<li class="list-item">Daily bug fixes</li>
				<li class="list-item">Daily backups</li>
			</ul>
		</div>
	</div>
@stop

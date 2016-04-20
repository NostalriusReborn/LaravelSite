@extends('layout')
@section('head')
@stop
@section('content')

<h1 style="text-align: center;">Register</h1>
<div class="row">
    <div class="col register">
        @if (isset($registerErrors[0]))
        <b>Account creation failed</b>
        <ul class="list">
            @foreach ($registerErrors as $error)
            <li class="list-item"> {!! $error !!} </li>
            @endforeach
        </ul>
        <br><br>
        @endif

        @if (isset($status) && $status == 1)
        <h4 style="color: green; text-align: center;">Account created</h4>
        @endif

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
        <ul class="list">
            <li class="list-item">This is a Beta Realm!</li>
            <li class="list-item">You don't need to enter your Nostalrius account information!</li>
            <li class="list-item">Your Nostalrius characters won't be available ealier than 30th of April.</li>
            <li class="list-item">This Beta Realm doesn't meet the quality standards of Nostalrius until we have the Nostalrius data.</li>
            <li class="list-item">You will be able to migrate your beta characters to the main realm when it is up.</li>
            <li class="list-item">The realmlist is "set realmlist logon.vanilla-servers.org"</li>
        </ul>
    </div>
</div>
@stop

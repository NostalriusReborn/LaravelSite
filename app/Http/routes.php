<?php

Route::get('/', 'PagesController@home');
Route::get('/register', 'AccountController@register');
Route::post('/account/create', 'AccountController@saveRegisteredAccount');

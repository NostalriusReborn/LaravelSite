<?php

Route::get('/', 'PagesController@home');
Route::get('/register', 'AccountController@register');
Route::get('/connection-guide', 'PagesController@connectionGuide');
Route::post('/account/create', 'AccountController@saveRegisteredAccount');

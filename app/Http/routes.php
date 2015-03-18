<?php
Route::get('/', 'WelcomeController@index');
Route::post('/contact', 'WelcomeController@postMessage');

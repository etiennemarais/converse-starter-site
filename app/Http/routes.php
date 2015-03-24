<?php
Route::get('/{pageName?}', 'ContentController@renderPage');
Route::post('/contact', 'WelcomeController@postMessage');

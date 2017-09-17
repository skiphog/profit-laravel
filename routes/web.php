<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', 'NewsController@index');

Route::get('/test-verify', 'TestVerifyController@testVerify')->middleware('verify');

Route::get('/test-news', 'TestNews@index');

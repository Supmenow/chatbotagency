<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$title = "Bot Agency";
	$description = "We are a bot agencey";
	$keywords = "Bot Agency";
    return view('welcome',compact("title","description","keywords"));
});

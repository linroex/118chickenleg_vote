<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/rank', function()
{
    return View::make('rank');
});
Route::get('/contestant/{id}', function()
{
    return View::make('contestant');
});
Route::get('/about', function()
{
    return View::make('about');
});
Route::get('/test', function(){
    
    var_dump(Contestant::data(1));
});
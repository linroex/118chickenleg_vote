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

Route::get('/','ContestantController@showAllContestant');
Route::group(array('before'=>'auth'),function(){
    Route::post('/vote','VoteController@vote');
    Route::post('/share','ContestantController@share');
});
Route::get('/rank', 'ContestantController@showRankPage');
Route::get('/contestant/{id}','ContestantController@showContestantPage');
Route::get('/about', function()
{
    return View::make('about');
});

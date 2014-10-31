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

Route::get('/holita', 'ComplaintController@verHola');

Route::get('/home', 'ComplaintController@action_index');

Route::post('/complaints/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/Registrar', 'ComplaintController@store');

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/show/{complaint_id}', 'ComplaintController@show' );

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/findId/{complaint_id}', 'ComplaintController@edit' );

Route::post('/update/{complaint_id}', 'ComplaintController@update' );

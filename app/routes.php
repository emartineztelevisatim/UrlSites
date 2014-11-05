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



Route::post('/find', 'searchController@searchurl');

Route::get('/search', 'searchController@search');

Route::get('/home', 'ComplaintController@action_index');

Route::post('/complaints/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/Registrar', 'ComplaintController@store');

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/show/{complaint_id}', 'ComplaintController@show' );

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/findId/{complaint_id}', 'ComplaintController@edit' );

Route::post('/update/{complaint_id}', 'ComplaintController@update' );

Route::get('/home', 'AddUrlSitiesController@addUrlSities');

Route::get('/home/addNewUrl','AddUrlSitiesController@addNewUrl');



/* Login configuration */
Route::get( 'login', 'HomeController@getLogin' );
Route::get( 'logout', 'HomeController@getLogout' );
Route::post( 'login', 'UsersController@login' );

Route::controller('emailPass','EmailController');



Route::get('social/{action?}', array("as" => "hybridauth", function($action = "")
{

    if (Session::has('user')){

     	return User::validateUserGoogle();
	}

	// check URL segment
	if ($action == "auth") {
		// process authentication
		try {
			Hybrid_Endpoint::process();
		}
		catch (Exception $e) {
			return Redirect::to('social');
		}
		return;
	}
	try {
		if (App::environment('local')){

    		$hybridauth = new Hybrid_Auth(app_path() . '/config/local/hybridauth.php');

		}elseif (App::environment('staging')) {
			
			$hybridauth = new Hybrid_Auth(app_path() . '/config/staging/hybridauth.php');
		}else{

			$hybridauth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
		}
		// create a HybridAuth object
		
    	$adapter = $hybridauth->authenticate( "Google" );
    	$user_profile = $adapter->getUserProfile(); 
    	$adapter->logout();

    	Session::put('user.firstname', $user_profile->firstName);
    	Session::put('user.lastname', $user_profile->lastName);
    	Session::put('user.gender', $user_profile->gender);
    	Session::put('user.email', $user_profile->email);

    	return User::validateUserGoogle();
	}
	catch(Exception $e) {
		return $e->getMessage();
	}
}));  /* social/{action?} */

Route::get('login',function(){
	return View::make('urlSites.login');
});

Route::get('prueba',function(){
	return View::make('urlSites.prueba');
});



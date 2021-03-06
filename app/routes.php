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



Route::post('/complaints/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/Registrar', 'ComplaintController@store');

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/show/{complaint_id}', 'ComplaintController@show' );

Route::post('/find/{complaint_id}', 'ComplaintController@destroy' );

Route::post('/findId/{complaint_id}', 'ComplaintController@edit' );

Route::post('/update/{complaint_id}', 'ComplaintController@update' );

//Route::get('/home', 'AddUrlSitiesController@addUrlEditor');

Route::get('/home/addNewUrl','AddUrlSitiesController@addNewUrl');

Route::get('/urlSite','AddUrlSitiesController@addUrlSities');

Route::get('/json', 'jsonController@json');

Route::get('/home/editorUrlSities','AddUrlSitiesController@editorUrlSities');


Route::get('/urlSites/editorUrlSities','AddUrlSitiesController@editorUrlSities');


Route::get('/urlSites',function(){

	return View::make('urlSites.urlSites');
});

Route::get('/formAddUrlUpdate',function(){

	return View::make('urlSites.formAddUrlUpdate');
});

Route::get('/formAddUrlAdd',function(){

	return View::make('urlSites.formAddUrlAdd');
});

Route::get('/home', 'AddUrlSitiesController@action_index');

//Route::get('home',function(){
//    
//    
//	return View::make('urlSites.home');
//});

Route::get('urlSites',function(){
    
    $urlSities = UrlSities::all();
    $urlInclude = urlInclude::all();
    $urlExclude = urlExclude::all();
        
    return View::make('urlSites.urlSites',array('urlSities'=>$urlSities,'urlInclude'=>$urlInclude,'urlExclude'=>$urlExclude)); 
});

//Route::get('urlSites',function(){
//    
//    
//	return View::make('urlSites.addUrl');
//});


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

//Route::get('welcome',function(){
//    
//    
//	return View::make('urlSites.urlSites');
//});



Route::controller('urlSite','urlSiteController');


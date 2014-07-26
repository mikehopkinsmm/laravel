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

Route::get('/', function(){
	return View::make('index');
});
Route::get('resume', function(){
	return View::make('resume');
});

Route::get('project/{short_name}', function($short_name){
	$item = DB::table('portfolio_items')->where('short_name',$short_name)->first();
	return Redirect::to('/projects/'.$item->type."/".$short_name);
});
Route::get('404', function(){
	return View::make('errors.missing');
});

Route::get('projects', 'ProjectTypeController@parseProject');
Route::get('projects/{type}', 'ProjectTypeController@parseProject');
Route::get('projects/{type}/{short_name}',array('as' => 'project', 'uses' => 'ProjectController@project'));

Route::get('contact', array('as' => 'contact_route', 'uses' => 'ContactController@getContact'));
Route::post('contact', array('before' => 'csrf', 'uses' => 'ContactController@getContactUsForm'));
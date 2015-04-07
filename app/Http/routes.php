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

Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::get('bestkicks/home', 'HomeController@index');

/** --- Routing of Posts --- **/
Route::post('/post/search' , 'PostController@search');

Route::get('/post/search' , 'PostController@search');

Route::get('/post', 'PostController@post');

Route::get('/post/create', 'PostController@create');

Route::resource('/post/{id}/delete', 'PostController@destroy');

Route::post('/post/create', 'PostController@store');

Route::get('/editpost/{id}', 'PostController@edit');
Route::post('/editpost/{id}', 'PostController@update');

Route::get('/myposts', 'PostController@myposts');

Route::get('/post/all', 'PostController@all');

Route::get('/post/finished', 'PostController@finished');

Route::put('/post/{id}', 'PostController@update_status');

Route::get('/post/{id}', 'PostController@show');

Route::resource('/post/{id}/comment/delete', 'CommentController@destroy');

Route::post('/post/{id}', 'CommentController@store');



/** --- Routing of Pages --- **/

Route::get('/adminhome', ['middleware' => 'admin', 'uses' => 'PagesController@adminhome']);

Route::get('/userhome', 'PagesController@userhome');

/** --- Routing of User Profile --- **/

Route::get('/userprofile', 'UserController@index');

Route::get('/editprofile', 'UserController@edit');
Route::post('/editprofile', 'UserController@store');

Route::get('/editpassword', 'UserController@password');
Route::post('/editpassword', 'UserController@passwordedit');

/** --- User Registration and Validation --- **/

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');


//Brand Controller
Route::get('/brand', ['middleware' => 'admin','uses' => 'BrandController@index']);
Route::get('/brand/create', ['middleware' => 'admin','uses' => 'BrandController@create']);
Route::resource('/brand/{id}/delete', 'BrandController@destroy');
Route::post('/brand/create', ['middleware' => 'admin','uses' => 'BrandController@store']);
Route::get('/brand/{id}/edit', ['middleware' => 'admin','uses' => 'BrandController@edit']);
Route::delete('/brand/{id}/edit', ['middleware' => 'admin','uses' => 'BrandController@destroy']);
Route::post('/brand/{id}/edit', ['middleware' => 'admin','uses' => 'BrandController@update']); 

//Size Controller
Route::get('/size', ['middleware' => 'admin','uses' => 'SizeController@index']);
Route::get('/size/create', ['middleware' => 'admin','uses' => 'SizeController@create']);
Route::resource('/size/{id}/delete', 'SizeController@destroy');
Route::post('/size/create', ['middleware' => 'admin','uses' => 'SizeController@store']);
Route::get('/size/{id}/edit',['middleware' => 'admin','uses' => 'SizeController@edit']);
Route::post('/size/{id}/edit',['middleware' => 'admin','uses' => 'SizeController@update']);
//Condition Controller
Route::get('/condition', ['middleware' => 'admin','uses' => 'ConditionController@index']);
Route::get('/condition/create', ['middleware' => 'admin','uses' => 'ConditionController@create']);
Route::resource('/condition/{id}/delete', 'ConditionController@destroy');
Route::post('/condition/create', ['middleware' => 'admin','uses' => 'ConditionController@store']);
Route::get('/condition/{id}/edit', ['middleware' => 'admin','uses' => 'ConditionController@edit']);
Route::post('/condition/{id}/edit', ['middleware' => 'admin','uses' => 'ConditionController@update']);

//Color Controller
Route::get('/color', ['middleware' => 'admin','uses' => 'ColorController@index']);
Route::get('/color/create', ['middleware' => 'admin','uses' => 'ColorController@create']);
Route::resource('/color/{id}/delete', 'ColorController@destroy');
Route::post('/color/create', ['middleware' => 'admin','uses' => 'ColorController@store']);
Route::get('/color/{id}/edit', ['middleware' => 'admin','uses' => 'ColorController@edit']);
Route::post('/color/{id}/edit', ['middleware' => 'admin','uses' => 'ColorController@update']);

//Shoe Type
Route::get('/shoetype', ['middleware' => 'admin', 'uses' => 'ShoeTypeController@index']);
Route::get('/shoetype/create', ['middleware' => 'admin', 'uses' => 'ShoeTypeController@create']);
Route::resource('/shoetype/{id}/delete', 'ShoeTypeController@destroy');
Route::post('/shoetype/create', ['middleware' => 'admin', 'uses' => 'ShoeTypeController@store']);
Route::get('/shoetype/{id}/edit', ['middleware' => 'admin', 'uses' => 'ShoeTypeController@edit']);
Route::post('/shoetype/{id}/edit', ['middleware' => 'admin', 'uses' => 'ShoeTypeController@update']);

//Location Controller
Route::get('/location', ['middleware' => 'admin','uses' => 'LocationController@index']);
Route::get('/location/{id}', ['middleware' => 'admin','uses' => 'LocationController@show']);
Route::resource('/location/{id}/delete', 'LocationController@destroy');
Route::get('/location/{id}/edit', ['middleware' => 'admin', 'uses' => 'LocationController@edit']);
Route::post('/location/{id}/edit', ['middleware' => 'admin','uses' => 'LocationController@update']);

//User Controller
Route::get('/sellers', 'UserController@indexseller');
Route::get('/buyers', 'UserController@indexbuyer');
Route::resource('/buyers/{id}/delete', 'UserController@destroy');
Route::resource('/sellers/{id}/delete', 'UserController@destroy');
Route::get('/profile/{id}', 'UserController@show');

Route::get('/usersellers', 'UserController@usersellers');
Route::get('/userbuyers', 'UserController@userbuyers');

Route::get('/verified', 'UserController@verified');
Route::get('/regular', 'UserController@regular');

//Post Controller
Route::get('/pending', 'PostController@indexpending');
Route::get('/approved', 'PostController@indexapproved');
Route::post('/pending/{id}', 'PostController@destroy');

//list of buyers/sellers
Route::put('/sellers', 'UserController@update_seller');
Route::put('/buyers', 'UserController@update_buyer');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

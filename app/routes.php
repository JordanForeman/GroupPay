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
	return View::make('hello');
});

Route::get('users', function()
{
	$users = User::all();

	return View::make('users')->with('users', $users);
});

Route::get('register', function()
{

});

Route::get('login', function()
{
	return View::make('login');
});

Route::post('login', function()
{
	// get POST data
	$userdata = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
	);

	if (Auth::attempt($userdata))
	{
		// we are now logged in, go to home
		return Redirect::to('home');
	}
	else
	{
		// auth failure! lets go back to login
		return Redirect::to('login')->with('login_errors', true);
	}
});

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('login');
});

Route::get('home', function()
{
	return View::make('home');
});

?>
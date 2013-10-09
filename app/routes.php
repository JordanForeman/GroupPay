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
	if (Auth::check()) {
		return Redirect::to('dashboard');
	} else {
		return Redirect::to('login');
	}
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('login', function()
{
	return View::make('login');
})->before('guest');

Route::post('login', function()
{
	$email = Input::get('email');
	$password = Input::get('password');
	//$password = Hash::make($password);

	//$password = '$2y$08$CfM3/L.DMZfjVfHGAnU8Gu9sZQcS8qMC3dvZEzT9lqiZUddFrEkQ.';

	// get POST data
	$userdata = array(
		'email' => $email,
		'password' => $password
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
})->before('guest');

Route::get('register', function()
{

});

Route::post('register', function()
{

});

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('login');
});

Route::get('dashboard', function()
{

});

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('users', function()
{
	$users = User::all();

	return View::make('users')->with('users', $users);
});

?>
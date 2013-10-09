<?php

/*
|--------------------------------------------------------------------------
| User Roles
|--------------------------------------------------------------------------
|
|
|
*/

static $ROLE_ADMIN = "admin";

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
		return View::make('welcome');
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

	// get POST data
	$userdata = array(
		'email' => $email,
		'password' => $password
	);

	if (Auth::attempt($userdata))
	{
		// we are now logged in, go to home
		return Redirect::to('dashboard');
	}
	else
	{
		// auth failure! lets go back to login
		return Redirect::to('login')->with('login_errors', true);
	}
})->before('guest');

Route::get('register', function()
{
	return View::make('register');
});

Route::post('register', function()
{
	$email = Input::get('email');
	$password = Hash::make(Input::get('password'));

	$userdata = array(
		'email' => $email,
		'name' => Input::get('name'),
		'password' => $password,
		'role' => 'standard'
	);
	
	DB::table('users')->insert($userdata);
	
	if (Auth::attempt(array('email'=>$email, 'password'=>$password)) )
		return Redirect::to('dashboard');
	else
		return Redirect::to('login');
	
	return Redirect::to('dashboard');
});

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('login');
});

Route::get('dashboard', function()
{
	return View::make('dashboard');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('users', function()
{
	$users = User::all();
	
	if (Auth::check() && Auth::user()->getRole() == "admin")
	{
		return View::make('users')->with('users', $users);
	}
	else
	{
		return Redirect::to('/');
	}
});

Route::post('users', function()
{
	$userdata = array(
		'email' => Input::get('email'),
		'name' => Input::get('name'),
		'password' => Hash::make(Input::get('password')),
		'role' => 'standard'
	);
	
	DB::table('users')->insert($userdata);
	
	return Redirect::to('users');
});

?>
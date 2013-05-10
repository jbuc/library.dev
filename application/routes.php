<?php

Route::get('/', array('as' => 'snippets', 'uses' => 'snippets@index'));
Route::get('/(:num)', array('as' => 'snippet', 'uses' => 'snippets@show'));

Route::post('/(:num)', 'snippets@update');

Route::get('/(:num)/preview', array('as' => 'preview_snippet', 'uses' => 'snippets@preview'));
Route::get('/new', array('as' => 'new_snippet', 'uses' => 'snippets@new'));
Route::get('/(:num)/edit', array('as' => 'edit_snippet', 'uses' => 'snippets@edit'));
Route::post('/', 'snippets@index');
Route::delete('/(:num)', 'snippets@destroy');

Route::get('photos/(:num)x(:num).png', array('as' => 'photo', 'uses' => 'photos@index'));


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
*/
Route::filter('image', function($response)
{
    $response->header('content-type', 'image/png');
});

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});
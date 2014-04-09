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
	return View::make('hello', ['latx' => 'Laravel Austin']);
});

Route::get('post', function()
{
	return View::make('postform');
});

Route::post('post', function()
{
	$post = new Post;
	$post->title = Input::get('title');
	$post->body = Input::get('body');
	$post->user_id = Input::get('user_id');
	$post->save();
	return Redirect::to('done')->withMessage('You are done!');

})->before('csrf');

Route::get('done', function()
{
	echo Session::get('message');
});

Route::get('blog', function()
{
		return Post::all();

});

Route::get('main', 'MainController@index');

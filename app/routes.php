<?php

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rolldice/{guess}', function($guess)
{
    $randNum = rand(1, 6);
    return View::make('roll-dice')->with('randNum', $randNum)->with('guess', $guess);
});

Route::get('orm-test', function ()
{
    $posts = Post::all();
    return var_dump($posts);
});

Route::resource('posts', 'PostsController');
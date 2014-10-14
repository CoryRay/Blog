<?php

class HomeController extends BaseController
{
    public function showWelcome()
    {
        return View::make('hello');
    }

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }

    public function showLogin()
    {
        return View::make('login');
    }

    public function doLogin()
    {
        //strings are the column names in database
        //Input::get is what is sent by the user
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            return Redirect::intended('/');
        } else {
            return Redirect::action('HomeController@showLogin');
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::action('PostsController@index');
    }
}
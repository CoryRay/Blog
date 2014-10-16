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

    public function showUser()
    {
        //make sure a user is logged in before showing this view
        //if (Auth::user()) {
            return View::make('user');
        //} else {
        //    return showLogin();
        // }
    }

    public function editUser()
    {
//built in laravel password reset for password change
//make a userController
//way generators - scaffolding for user
    }
}
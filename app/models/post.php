<?php

class Post extends Eloquent
{
    public static $rules = 
    [
        'title' => 'required | max:255',
        'body' => 'required'
    ];

    protected $table = 'posts';
}
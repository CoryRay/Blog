<?php

class Post extends Eloquent
{
    const DATE_FORMAT = 'F jS, Y';

    public static $rules = 
    [
        'title' => 'required | max:255',
        'body' => 'required'
    ];

    protected $table = 'posts';
}
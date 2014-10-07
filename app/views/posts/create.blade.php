@extends('layouts.master')

@section('content')
<div class='container'>
    <form action="{{{ action('PostsController@store') }}}" method='POST'>
        <div class='form-group'>
            <label for="title" >Post Title:</label>
            <input class='form-control' type="text" id='title' name='title' value="{{{ Input::old('title') }}}" required>
        </div>
        <div class='form-group'>
            <label for="body">Body:</label>
            <textarea name="body" id="body" class='form-control' rows="5" required>{{{ Input::old('body') }}}</textarea>
        </div>
        <div class='form-group'>
            <button class='btn btn-default'>Submit</button>
        </div>
    </form>
</div>
@stop
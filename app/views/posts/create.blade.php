@extends('layouts.postsTemplate')

@section('title')<title>Create a Post</title> @stop

@section('specific')
<div class='col-md-8'>
    <h2>Create a New Post</h2>
    <hr>
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'files' => true]) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title', 'required' => '']) }}
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'id' => 'body', 'rows' => '5', 'required' => '']) }}
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('image', 'Image:') }}
        {{ Form::file('image', ['id' => 'image']) }}
        <p class="help-block">This is optional.</p>
    </div>
    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
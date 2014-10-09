@extends('layouts.postsTemplate')

@section('content')
<div class='col-md-8'>
    <h2>Create a New Post</h2>
    <hr>
    {{ Form::open(array('action' => 'PostsController@store')) }}
    <div class='form-group'>
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'id' => 'title'] ) }}
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::label('body', 'Body:') }}
        {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'id' => 'body', 'rows' => '5'] ) }}
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        {{ Form::button('Submit', ['class' => 'btn btn-default'] ) }}
    </div>
    {{ Form::close() }}
</div>
@stop
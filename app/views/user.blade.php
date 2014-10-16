@extends('layouts.postsTemplate')

@section('title')<title>Edit a User</title> @stop

@section('specific')
<div class='col-md-8'>
    <h2>Edit a User</h2>
    <hr>
    {{ Form::open(['action' => 'HomeController@editUser', 'method' => 'PUT']) }}
    <div class='form-group'>
        {{ Form::label('first_name', 'First Name:') }}
        {{ Form::text('first_name', '', ['class' => 'form-control', 'id' => 'first_name', 'required' => '']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('last_name', 'Last Name:') }}
        {{ Form::text('last_name', '', ['class' => 'form-control', 'id' => 'last_name', 'required' => '']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('email', 'eMail Address:') }}
        {{ Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'required' => '']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required' => '']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('password2', 'Retype your Password:') }}
        {{ Form::password('password2', ['class' => 'form-control', 'id' => 'password2', 'required' => '']) }}
    </div>
    <div class='form-group'>
        {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
@stop
@extends('layouts.postsTemplate')

@section('specific')
<div class='col-md-8'>
    <h2>Log In</h2>
    <hr>
    {{ Form::open(['action' => 'HomeController@doLogin', 'method' => 'POST']) }}
    <div class='form-group'>
        {{ Form::label('email', 'Email Address:') }}
        {{ Form::email('email', $value = null, ['id' => 'email', 'class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['id' => 'password', 'class' => 'form-control']) }}
    </div>
    <div class='form-group'>
        {{ Form::submit('Log in', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>    
@stop
@extends('layouts.postsTemplate')

@section('content')
<div class='col-md-8'>
    <h2>Create a New Post</h2>
    <form method='POST' action="{{{ action('PostsController@store') }}}">
        <div class='form-group'>
            <label for="title" >Post Title:</label>
            <input id='title' class='form-control' name='title' type="text" value="{{{ Input::old('title') }}}" required>
            {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
        </div>
        <div class='form-group'>
            <label for="body">Body:</label>
            <textarea id="body" class='form-control' name="body" rows="5" required>{{{ Input::old('body') }}}</textarea>
            {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
        </div>
        <div class='form-group'>
            <button class='btn btn-default'>Submit</button>
        </div>
    </form>
</div>
@stop
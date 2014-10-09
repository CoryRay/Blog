@extends('layouts.postsTemplate')

@section('content')
<div class='col-md-8'>
    <h2>Edit a Post</h2>

    {{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) }}
    <div class='form-group'>
        <label for="title" >Post Title:</label>
        <input id='title' class='form-control' name='title' type='text' value='{{{ $post->title }}}' required>
        {{ $errors->first('title', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        <label for="body">Body:</label>
        <textarea id="body" class='form-control' name="body" rows="5" required>{{{ $post->body }}}</textarea>
        {{ $errors->first('body', '<br><div class="alert alert-info">:message</div>') }}
    </div>
    <div class='form-group'>
        <button class='btn btn-default'>Update</button>
    </div>
    {{ Form::close() }}
</div>
@stop
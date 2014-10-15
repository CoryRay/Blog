@extends('layouts.postsTemplate')

@section('specific')
<div class="col-md-8"> <!-- Blog Post Column -->

    <article> <!-- Blog Post -->
        <h1>{{{ $post->title }}}</h1>

        <p>by {{{ $post->user->email }}}, on {{ $post->updated_at->format(Post::DATE_FORMAT) }}</p>

        @if (Auth::check()) <!-- Buttons to edit and delete posts -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id], 'id' => 'delete-form']) }}
        <a class='btn btn-default' href={{ action('PostsController@edit', $post->id) }}>Edit</a>
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::close() }}
        @endif
        <hr>

        @if ($post->img)
        {{ HTML::image($post->img, '', ['class' => 'img-responsive']) }}
        <hr>
        @endif

        <p class="lead">{{{ $post->body }}}</p>
    </article>

</div> <!-- end col-md-8 -->
@stop

@section('bottom-script')
<script>
$('#delete-form').submit(function(event) {
    if (!confirm('Are you sure you want to delete this?')) {
        event.preventDefault();
    };
});
</script>
@stop
@extends('layouts.postsTemplate')

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1>My Blog</h1>
    <a class='btn btn-default' href={{ action('PostsController@create') }}>New Post</a>
    <hr>

    <!-- Blog Post  -->
    <article>
        @forelse($posts as $post)
        <h3 id='title'>{{{ $post->title }}}</h3>
        <p id='date'>{{{ $post->updated_at->setTimezone('America/Chicago')->format(Post::DATE_FORMAT) }}}</p>
        <img class='img-responsive' src="http://placehold.it/900x300" alt="">
        <p id='body'>{{{ $post->body }}}</p>
        <a class="btn btn-sm btn-primary" href="posts/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        @empty
        <p>No mo post</p>
        @endforelse
    </article>
    
    <hr>

    <!-- Paginator -->
    {{ $posts->links() }}
</div>
@stop
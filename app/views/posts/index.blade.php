@extends('layouts.postsTemplate')

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1>My Blog</h1>
    <hr>

    <!-- Blog Post  -->

    @forelse($posts as $post)
    <h3 id='title'>{{{ $post->title }}}</h3>
    <p id='date'>{{{ date("F j, Y", strtotime($post->updated_at))}}}</p>
    <div class='img-responsive' id='image'><img src="" alt="">IMAGE HERE</div>
    <p id='body'>{{{ $post->body }}}</p>
    <a class="btn btn-sm btn-primary" href="posts/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    @empty
    <p>No mo post</p>
    @endforelse

    <hr>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
</div>
@stop
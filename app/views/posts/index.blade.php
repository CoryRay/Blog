@extends('layouts.master')

@section('content')
<div class='container'>
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1>My Blog</h1>
            <hr>

            <!-- Blog Post  -->

            @forelse($posts as $post)
            <h3 id='title'>{{{ $post->title }}}</h3>
            <p id='date'>{{{  $post->updated_at}}}</p>
            <p id='body'>{{{ $post->body }}}</p>
            <div class='img-responsive' id='image'>IMAGE HERE</div>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
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

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div> <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Vidya</a>
                            </li>
                            <li><a href="#">Television</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div> <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Programming</a>
                            </li>
                            <li><a href="#">Life Lessons</a>
                            </li>
                            <li><a href="#">Work</a>
                            </li>
                            <li><a href="#">Education</a>
                            </li>
                        </ul>
                    </div> <!-- /.col-lg-6 -->
                </div> <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Dumb Fortune Here</h4>
                <?php $output = shell_exec('/usr/games/fortune'); echo "$output";?>
            </div>

        </div>

    </div> <!-- /.row -->
</div>
@stop
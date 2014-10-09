@extends('layouts.postsTemplate')

@section('content')
<div class="col-md-8"> <!-- Blog Post Column -->

    <article> <!-- Blog Post -->
        <h1>{{{ $post->title }}}</h1>

        <p class="lead">by <a href="#">Cory Rodriguez</a>, on {{ $post->updated_at->format(Post::DATE_FORMAT) }}</p>

        <!-- TO EDIT A POST -->
        <a class='btn btn-default' href={{ action('PostsController@edit', $post->id) }}>Edit</a>

        <!-- TO DELETE A POST -->
        {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id], 'id' => 'delete-form']) }}
        <div class='form-group'>
            {{ Form::submit('Delete Post', ['class' => 'btn btn-danger']) }}
        </div>
        {{ Form::close() }}
        <hr>

        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
        <hr>

        <p class="lead">{{{ $post->body }}}</p>
    </article>

    <hr>

    <!-- Blog Comments -->
    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form role="form">
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr>

    <!-- Posted Comments -->
    <!-- Comment -->
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Start Bootstrap
                <small>August 25, 2014 at 9:30 PM</small>
            </h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>

    <!-- Comment -->
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading">Start Bootstrap
                <small>August 25, 2014 at 9:30 PM</small>
            </h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <!-- Nested Comment -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Nested Start Bootstrap
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div> <!-- End Nested Comment -->
        </div>
    </div>
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
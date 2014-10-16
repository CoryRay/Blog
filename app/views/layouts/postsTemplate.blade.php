@extends('layouts.master')

@section('content')
<div class='container'>
    <div class='row'>

        <!-- this shows a message after submitting a post -->
        @if (Session::has('successMessage'))
        <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
        <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>{{{ Session::get('errorMessage') }}}</div>
        @endif

        <!-- PAGE MAIN CONTENT -->
        @yield('specific')

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                {{ Form::open(['action' => 'PostsController@index', 'method' => 'GET']) }}
                <div class="input-group">
                    {{ Form::text('search',  null, ['class' => 'form-control']) }}
                    <span class="input-group-btn">
                        <button class="btn btn-default" type='submit'><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div> <!-- END .input-group -->
                {{ Form::close() }}
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Vidya</a></li>
                            <li><a href="#">Television</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Category Name</a></li>
                        </ul>
                    </div> <!-- end .col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Life Lessons</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Category Name</a></li>
                        </ul>
                    </div> <!-- end .col-lg-6 -->
                </div> <!-- end .row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <p>This is a sidebar well.</p>
            </div>
        </div>
    </div> <!-- END ROW - CONTAINS THE INNER CONTENT -->
</div> <!-- END CONTAINER -->
@stop
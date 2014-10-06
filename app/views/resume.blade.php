@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>Cory Rodriguez <small>Web Developer</small></h1>
        </div>
        <div class="col-sm-4">
            <h3>My Contact Info. </h3>
            <address>
                <span class="glyphicon glyphicon-star"></span><a href="https://github.com/CoryRay"> Gitub</a> <br>
                <span class="glyphicon glyphicon-link"></span><a href="http://lnkd.in/bTuUSWh"></abbr>LinkedIn</a><br>
                <abbr title="email"><span class="glyphicon glyphicon-envelope"></span><a href="mailto:coreyreylp@gmail.com"></abbr> coreyreylp@gmail.com</a><br>
                <abbr title="Phone"><span class="glyphicon glyphicon-phone"></span></abbr> (210) 693-8141
            </address>
        </div>
    </div> <!-- end row -->

    <hr>
    <div class='row'>
        <div class='col-md-4'>
            <h3>Education</h3>
            <p><a href="http://www.brooksacademy.org">Brooks Academy of Science and Engineering</a></p>
            <p>Codeup LAMP + J Course</p>
        </div>
        <div class='col-md-4'>
            <h3>Work Experience</h3>
            <dl class="dl-horizontal">
                <dt><a href="http://www.codeup.com">Codeup</a> - Intern</dt>
                <dd>6 Months</dd>
                <dt><a href="http://www.mcdonalds.com">McDonald's</a> - Crew</dt>
                <dd>6 Months</dd>
            </dl>
        </div>
        <div class='col-md-4'>
            <h3>Honors/Awards</h3>
            <ul>
                <li>National Hispanic Scholar</li>
                <li>Member of <abbr title="Society of Hispanic Professional Engineers">SHPE</abbr></li>
                <li>AAAA Regional Wrestling Qualifier</li>
            </ul>
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->
@stop
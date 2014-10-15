<!DOCTYPE html>
<html>
<head>
    <!-- Original Template Courtesy of Start Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <title>Laravel Blog Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/posts">Cory&rsquo;s Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li @if (Route::currentRouteUses('HomeController@showResume')) class='active' @endif><a href="/resume">Resume</a></li>
                    <li @if (Route::currentRouteUses('HomeController@showPortfolio')) class='active' @endif><a href="/portfolio">Portfolio</a></li>
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                    @if (Auth::check())
                    <li><a href="#">{{ Auth::user()->email }} is logged in</a></li>
                    <li><a href="/logout">Log Out</a></li>
                    @else
                    <li><a href="/login">Log In</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class='container'>
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Cory &copy; My Website 2014</p>
                </div>
            </div>
        </footer>
    </div>

    @yield('bottom-script')

</body>
</html>
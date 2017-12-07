<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Code snippets, tips and tricks for Laravel PHP framework" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://laravel-tricks.com" />
    <meta property="og:image" content="http://laravel-tricks.com/img/logo.jpg" />
    <meta property="og:site_name" content="laravel-tricks.com" />
    <meta property="og:description" content="Laravel tricks is a website that aggregates useful tips and tricks for Laravel PHP framework" />
    <meta name="description" content="Laravel tricks is a website that aggregates useful tips and tricks for Laravel PHP framework">
    <meta name="author" content="Muhamad Tobiin, @tobidsn"> 
    <script type="text/javascript" src="//use.typekit.net/eef7zlf.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" href="http://laravel-tricks.com/css/styles.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield("header")
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="wrap">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img width="207" height="50" src="http://laravel-tricks.com/img/logo@2x.png">
                    </a>
                </div>

                <div class="collapse navbar-collapse header-collapse">
                    <ul class="nav navbar-nav">

                        <li class="{{ (\Request::segment(1) == '') ? 'active' : '' }}"><a href="{{ url('/') }}">Browse</a></li>
                        <li class="{{ (\Request::segment(1) == 'categories') ? 'active' : '' }}"><a href="{{ url('categories') }}">Categories</a></li>
                        <li class="{{ (\Request::segment(1) == 'tags') ? 'active' : '' }}"><a href="{{ url('tags') }}">Tags</a></li>
                        <li class=""><a href="{{ url('/') }}">Create New</a></li>

                        <li class="visible-xs"><a href="{{ url('register') }}">Register</a></li>
                        <li class="visible-xs"><a href="{{ url('login') }}">Login</a></li>

                    </ul>

                    <div class="navbar-right hidden-xs">
                        <a href="{{ url('register') }}" class="btn btn-primary">Register</a>
                        <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                    </div>
                </div>

            </div>
        </div>
        @yield("content")
    </div>
    <div id="footer">
        <div class="container">
            <p class="text-muted credit">Website built with <a href="http://laravel.com">Laravel</a> by <a target="_blank" href="http://twitter.com/tobidsn">Muhamad Tobiin</a> &amp; Template by <a target="_blank" href="https://github.com/CodepadME/laravel-tricks">Laravel Trick</a> | <a href="{{ url('about') }}">About</a>
            <span class="pull-right">
                    <a target="_blank" href="http://twitter.com/tobidsn" title="Follow updates"><i class="fa fa-twitter fa-lg"></i></a>
                    |
                    <a target="_blank" href="https://github.com/tobidsn/plesup" title="Get the source of this site"><i class="fa fa-github fa-lg"></i></a>
                </span> 

        </div>
    </div>
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://laravel-tricks.com/js/vendor/masonry.pkgd.min.js"></script>
    <script>
        $(function(){$container=$(".js-trick-container");$container.masonry({gutter:0,itemSelector:".trick-card",columnWidth:".trick-card"});$(".js-goto-trick a").click(function(e){e.stopPropagation()});$(".js-goto-trick").click(function(e){e.preventDefault();var t="http://laravel-tricks.com/tricks";var n=$(this).data("slug");window.location=t+"/"+n})})
    </script>
    @yield("footer")
</html>

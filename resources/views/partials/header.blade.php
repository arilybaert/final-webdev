<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify Promo</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- language icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

</head>
<body>
        <!-- NAVIGATION -->
        <nav class="navbar navbar-expand-lg navbar-light o-nav">

        <a class="navbar-brand " href="{{ url('/')}}">
            <img src="{{asset('images/spotify-png.png')}}" alt="spotify logo" class="a-footerLogo">
            <span class="a-colornav text-white">
              Spotify Promo
            </span>
        </a>
            <button class="navbar-toggler o-navbarToggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="nav navbar-nav ml-auto">
                <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link a-colornav text-white {{ (request()->is('blogs')) ? 'active' : '' }}" href="{{ route('blogs', app()->getLocale()) }}">{{__('Blogs')}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link a-colornav text-white {{ (request()->is('donations')) ? 'active' : '' }}" href="{{ route('donations', app()->getLocale()) }}">{{__('Donation')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white a-colornav {{ (request()->is('about')) ? 'active' : '' }}" href="{{ route('about', app()->getLocale()) }}">{{__('About')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white a-colornav {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact', app()->getLocale()) }}">{{__('Contact')}}</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{__('Language')}}</a>

                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <a class="dropdown-item " href="{{ route(Route::currentRouteName(), 'nl') }}"><span class="flag-icon flag-icon-be"> </span>  NL</a>
                    <a class="dropdown-item " href="{{ route(Route::currentRouteName(), 'en') }}"><span class="flag-icon flag-icon-us"> </span>  ENG</a>

                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white a-colornav" href="{{ route('admin')}}">Login</a>
                </li>



              </ul>
            </div>
        </nav>
        <div class="container o-main">




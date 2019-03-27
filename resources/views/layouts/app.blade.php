<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">{{App::getLocale()}}</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('lang/en') }}"><span
                            class="flag-icon flag-icon-gb"></span> @lang('language.english')</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('lang/nl') }}"><span
                            class="flag-icon flag-icon-nl"></span> @lang('language.dutch')</a>
            </div>
        </li>
    </ul>
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/#about">@lang('general.about')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#experience">@lang('general.experience')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#education">@lang('general.education')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#skills">@lang('general.skills')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#interests">@lang('general.interests')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#awards">@lang('general.awards')</a>
            </li>
            <!-- Authentication Links -->
            @guest

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">@lang('general.dashboard')</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<div id="app">
    @guest

    @else
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">@lang('general.editPages')</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('settings') }}">@lang('general.settings')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endguest
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>

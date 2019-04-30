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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
@if(Route::is('login'))
    <body style="padding-left: 0!important;">
    @else
        <body>
        @endif
        @if(!Route::is('login'))
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
                <div class="row mx-auto" style="width: 100%;">
                    <div class="col-3 d-lg-none d-block">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#left-nav"
                                aria-controls="left-nav" aria-expanded="false" aria-label="Toggle navigation"
                                style="width: 50px; height: 40px;">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                        <a class="navbar-brand js-scroll-trigger col-6 d-lg-none d-block mr-0 text-center" href="{{ url('/') }}">
                            <span class="d-block d-lg-none"></span>
                        </a>
                    @guest
                    @else
                        <div class="col-3 d-lg-none d-block">
                            <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                                    data-target="#topbar"
                                    aria-controls="topbar" aria-expanded="false" aria-label="Toggle navigation"
                                    style="width: 50px; height: 40px;">
                                <i class="fa-lg fas fa-cog mx-auto"></i>
                            </button>
                        </div>
                @endguest
                <!-- nav-left photo -->
                    <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
                            <span class="d-none d-lg-block">
                    <img class="img-fluid img-profile rounded-circle mt-5"
                         src="{{url ('storage/images/avatar/avatar.jpg')}}" alt="" style="height: 200px; width: 200px;">
                    </span>
                    </a>

                    <div class="navbar-collapse collapse text-center" id="left-nav">
                        <ul class="navbar-nav mx-auto">
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

                            <li class="nav-item dropdown spaceTop">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false">{{App::getLocale()}}</a>
                                <div class="dropdown-menu dropdown-menu-right shadow">
                                    <a class="dropdown-item" href="{{ url('lang/en') }}"><span
                                                class="flag-icon flag-icon-gb"></span> @lang('language.english')</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('lang/nl') }}"><span
                                                class="flag-icon flag-icon-nl"></span> @lang('language.dutch')</a>
                                </div>
                            </li>
                            @guest

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow w-100" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                           href="{{ route('dashboard') }}">@lang('general.dashboard')
                                            <i class="fa fa-arrow-right float-right pt-1 pb-1" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        @guest
                            <div class="container nav-footerlink nav-footerborder large-show">
                                <div class="row">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item">
                                            <div class="row">
                                                <a class="nav-link col-6 pl-5 large-show" href="{{ url('/login') }}">@lang('general.login')</a>
                                                <a class="nav-link col-6 float-lg-right pr-5 large-show" href="/">@lang('general.contact')</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="container nav-footerlink nav-footerborder large-show">
                                <div class="row">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item">
                                            <div class="row">
                                                <a class="nav-link col-6 pl-5 large-show" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                                <a class="nav-link col-6 float-lg-right pr-5 large-show" href="/">@lang('general.contact')</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </nav>
            <div id="app">
                @endif

                @guest

                @else
                    <nav class="navbar navbar-expand-md navbar-light topSpacer navbarAdmin">
                        <div class="collapse navbar-collapse" id="topbar">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                       role="button"
                                       aria-haspopup="true" aria-expanded="false">@lang('general.editPages')</a>
                                    <div class="dropdown-menu shadow">
                                        <a class="dropdown-item "
                                           href="{{ route('showEditAbout') }}">@lang('general.editAbout')
                                            <i class="fa fa-arrow-right float-right pt-1 pb-1" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('settings') }}"><i
                                                class="fa-lg fas fa-cog"></i> @lang('general.settings')</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                @endguest
                <main style="{{ Route::is('login') ? 'min-height: 100vh;' : '' }}">
                    @yield('content')
                </main>
            </div>
            @if(Route::is('login'))
        </body>
        @else
    </body>
@endif
<script src="{{ asset('js/app.js') }}" defer></script>
</html>

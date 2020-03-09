<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">{{ config('app.name', 'Laravel') }}</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li
                        class="{{ Request::url() === route('index') ? 'current_page_item' : '' }}">
                        <a href="/" accesskey="1" title="">Homepage</a></li>
                    <li
                        class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}">
                        <a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li
                        class="{{ Request::url() === route('about') ? 'current_page_item' : '' }}">
                        <a href="/about" accesskey="3" title="">About Us</a></li>
                    <li
                        class="{{ Request::url() === route('articles.index') ? 'current_page_item' : '' }}">
                        <a href="{{ route('articles.index') }}" accesskey="4" title="">Articles</a>
                    </li>
                    <li
                        class="{{ Request::url() === route('contact.show') ? 'current_page_item' : '' }}">
                        <a href="{{ route('contact.show') }}" accesskey="5" title="">Contact Us</a></li>

                </ul>
            </div>
            <nav class="navbar navbar-expand-md navbar-black bg-black shadow-sm">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if(Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('header-featured')
    </div>

    @yield('content')

    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a
                href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name', 'Laravel'))</title>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/mahmoudtr-2.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.loadingscreen')
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container justify-self-center">
                <a class="navbar-brand hyper-helix text-h2" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @include('components.buttons.button',['text'=>"Menu"])
                        </a>

                        <div class="dropdown-menu dropdown-menu-end menu-component me-4" aria-labelledby="navbarDropdown">
                            @guest
                                <a class="dropdown-item" href="{{ route('about') }}">@include('components.menuitem',['text'=>'about'])</a>
                                <a class="dropdown-item" href="{{ route('project.index') }}">@include('components.menuitem',['text'=>'projects'])</a>
                                <a class="dropdown-item" href="{{ route('contacts') }}">@include('components.menuitem',['text'=>'contacts'])</a>
                            @else
                                <a class="dropdown-item" href="{{ route('home') }}">@include('components.menuitem',['text'=>'home'])</a>
                                <a class="dropdown-item" href="{{ route('project.index') }}">@include('components.menuitem',['text'=>'projects'])</a>
                                <a class="dropdown-item" href="{{ route('message.index') }}">@include('components.menuitem',['text'=>'messages'])</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    @include('components.menuitem', ['text'=>'Logout'])
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @include('components.infoalert')
            @yield('content')
        </main>
    </div>
</body>
</html>

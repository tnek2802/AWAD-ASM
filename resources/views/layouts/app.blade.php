<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Abibas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/css/topnav.css') }}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div class="topnav">
                                    <div class="logo">
                                        <a href="{{ url('/') }}">
                                            {{ __('Abibas') }}
                                        </a>
                                    </div>
                                    <a class="nav-link" href='/Cart'>{{ __('Cart') }}</a>
                                    <a class="nav-link" href='/MenClothes'>{{ __('Men Clothes') }}</a>
                                    <a class="nav-link" href='/MenShoes'>{{ __('Men Shoes') }}</a>
                                    <a class="nav-link" href='/WomenClothes'>{{ __('Women Clothes') }}</a>
                                    <a class="nav-link" href='/WomenShoes'>{{ __('Women Shoes') }}</a>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                            @endif
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                                </div>
                        @else
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @if (Route::has('logout'))
                                    <div class="topnav">
                                    <div class="logo">
                                        <a href="{{ url('/') }}">
                                            {{ __('Abibas') }}
                                        </a>
                                    </div>
                                    <a class="nav-link" href='/Cart'>{{ __('Cart') }}</a>
                                    <a class="nav-link" href='/MenClothes'>{{ __('Men Clothes') }}</a>
                                    <a class="nav-link" href='/MenShoes'>{{ __('Men Shoes') }}</a>
                                    <a class="nav-link" href='/WomenClothes'>{{ __('Women Clothes') }}</a>
                                    <a class="nav-link" href='/WomenShoes'>{{ __('Women Shoes') }}</a>
                                @endif

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Hi, {{ Auth::guard('web')->user()->username }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                    </div>
                @endguest
                </ul>
            </div>
    </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>

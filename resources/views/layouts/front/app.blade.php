<!DOCTYPE html>
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
    <link rel="stylesheet" href="{{ asset('fonts/ASTERA v2.ttf') }}">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/app2.css') }}"> --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img width="100" class="p-1" src="{{ asset('images/adb1.png') }}" alt="">
                </a>
                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mt-4" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"><i class="far fa-clipboard text-dark"></i>  {{ __('Index') }}</a>
                        </li>
                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>                            
                        @else                     
                            {{-- @role('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('companies') }}"><i class="far fa-building"></i>{{ __('Empresas') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('areas') }}">{{ __('Areas') }}</a>
                            </li>
                            @endrole --}}
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-tie"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="#" class="dropdown-item" >Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

            {{-- <footer class="text-center bg-dark py-5">
                <div class="row">

                    <div class="col-12 col-md">
                    <small class="d-block text-muted">© 2017-2019</small>
                    </div>

                    <div class="col-6 col-md">
                    <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md">
                    <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md">
                    <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Business</a></li>
                            <li><a class="text-muted" href="#">Education</a></li>
                            <li><a class="text-muted" href="#">Government</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md">
                    <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                        </ul>
                    </div>

                </div>
            </footer> --}}
    </div>
    {{-- <script type="text/javascript" src="{{ asset('js/app2.js') }}"></script> --}}
</body>
</html>

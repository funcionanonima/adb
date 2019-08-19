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
    <link rel="stylesheet" href="{{ asset('fonts/ASTERA v2.ttf') }}">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
</head>
<body>
    <div id="app" class="">
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
            <div class="container-fluid">
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
                                <a class="nav-link" href="{{ route('home') }}"><i class="far fa-clipboard"></i>  {{ __('Index') }}</a>
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
                            <li class="nav-item dropdown">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-tie"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="#" class="dropdown-item" ><i class="far fa-id-badge"> </i>   Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Cerrar Sesion') }}
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

        @role('admin')
        <div class="container-fluid">
                <div class="row">          
                    <div class="col-md-2 d-none d-md-block bg-light sidebar">
                        <nav class="">
                            <div class="sidebar-sticky">
                                
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Administrador</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                </a>
                            </h6>  
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-users-cog"></i>{{ __('Control Usuarios') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('companies') }}"><i class="far fa-building"></i>{{ __('Control Empresas') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('areas') }}"><i class="fas fa-puzzle-piece"></i>{{ __('Control Areas') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('documents') }}"><i class="fas fa-file"></i>{{ __('Control Documentos') }}</a>
                                    </li>  
                                    <hr>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Cerrar Sesion') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>                
                            </div>
                        </nav>
                    </div>
              
                    <div class="col-md-10 d-none d-md-block">
                        <main class="">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
            @endrole
            
            @role('user')
            <div class="container-fluid">
                <main class="">
                    @yield('content')
                </main>
            </div>
            @endrole
            
            @guest
            <div class="container-fluid">
                <main class="">
                    @yield('content')
                </main>
            </div>
            @endguest
                    
        

        <footer class="bg-dark footer mt-auto py-3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <ul class="text-light p-0" style="list-style:none">
                            <li>ADB_Consultores</li>
                            <li>+57 3163413215</li>
                            <li>wilopez@adbconsulting.com.co</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <p class="text-light text-right">2019@OzdevZ</p>
                    </div>
                </div>
            </div>
        </footer>
        

    </div>
    {{-- <script type="text/javascript" src="{{ asset('js/app2.js') }}"></script> --}}
</body>
</html>

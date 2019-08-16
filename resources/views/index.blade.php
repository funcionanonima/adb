
            {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
                <a class="navbar-brand" href="{{ url('/') }}">ADB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home<span class="sr-only">(current)</span></a>
                        </li>
                        @role('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>           
                        @endrole             
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                             </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endauth                        
                    </ul>
                </div>
            </nav> --}}

            

@extends('layouts.app')

@section('content')
<div class="content">
        <div class="text-center">
                <img class="" src="{{ asset('images/nn.png') }}" alt="no">
            </div>
    <div class="mt-2 jumbotron bg-dark">
        {{-- <h2 class="display2">ADB Consultores</h2> --}}
        <img  width="140px" src="{{ asset('images/adb1.png') }}" class="pb-4" alt="">   
        <hr class="bg-warning"> 
        <div class="col-10">
            <p class="text-light h5">Somos una empresa conformada por un grupo de profesionales que asesoramos y facilitamos la administración de procesos apoyados en información de los diferentes sectores económicos y basados en análisis estadísticos para la toma de decisiones. Nos apasiona analizar y evaluar el impacto de las políticas públicas en el sector privado y generar alternativas para su aprovechamiento.</p>                

        </div>
    </div>
    
    <div class="text-center p-4" >
        <img  width="300px" src="{{ asset('images/adb1.png') }}" class="p-4" alt="">
    </div>

    <div class="jumbotron bg-dark text-center display1">
        <div class="container text-center">
            <h3 class="text-light">Contactános</h3>
            <div class="col-6 offset-sm-3">
                <form class="text-center py-4" action="">
                    <div class="row">
                        <div class="col-6 form-group">
                            <input type="text" class="form-control"  placeholder="Nombre">
                        </div>
                        <div class="col-6 form-group">
                            <input type="text" class="form-control"  placeholder="Empresa">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


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
        <img width="100%" src="{{ asset('images/nn.png') }}" alt="no">
    </div>

    <div class="mt-2 jumbotron bg-dark">
        {{-- <h2 class="display2">ADB Consultores</h2> --}}
        <img  width="140px" src="{{ asset('images/adb1.png') }}" class="pb-4 pl-4" alt="">   
        <hr class="bg-warning"> 
        <div class="col-10">
            <p class="text-light h5">Somos una empresa conformada por un grupo de profesionales que asesoramos y facilitamos la administración de procesos apoyados en información de los diferentes sectores económicos y basados en análisis estadísticos para la toma de decisiones. Nos apasiona analizar y evaluar el impacto de las políticas públicas en el sector privado y generar alternativas para su aprovechamiento.</p>                
        </div>
    </div>
    
    <div class="text-center p-4" >
        <img  width="300px" src="{{ asset('images/adb1.png') }}" class="p-4" alt="">
    </div>

    <div class="album py-5 bg-dark">
        <div class="container">
    
            <div class="row">
                    <div class="col">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                            <p class="card-text">Diseño y estructuración de procesos</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body">
                            <p class="card-text">Medición y evaluación por gestión de procesos</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                        </div>
                    </div>

            </div>

            <div class="row">

                <div class="col">
                    <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <p class="card-text">Documentación y estandarización de procesos</p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <p class="card-text">Análisis de las políticas públicas y su impacto en los diferentes sectores económicos</p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                    </div>
                </div> 

            </div>

        </div>
    </div>

    <div class="jumbotron bg-light text-center display1">
        <div class="container text-center">
            <h3 class="">Contactános</h3>
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

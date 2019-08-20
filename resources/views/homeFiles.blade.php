@extends('layouts.app')
    @section('content')
        <div class="container-fluid mt-4">
            <h2 class="">Bienvenido {{Auth::user()->name}}</h2>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Empresas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Áreas</li>
                    <li class="breadcrumb-item active" aria-current="page">Documentos</li>
                </ol>
            </nav>
            <p>Documentos Registrados para este Área:</p>
            <div class="container">
                <div class="row">
                    @if(count($fils) > 0)
                        @foreach($fils as $file)
                        <div class="col-xl-3 col-md-6 mb-4">                    
                            {{-- <a href="/chivos/{{$file->id}}"> --}}
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        {{$file->name}}
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </a>                                       
                        </div>
                        @endforeach
                    @else
                        <div class="my-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">No posee Documentos registrados ahún</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Comuniquese con el administrador</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endsection
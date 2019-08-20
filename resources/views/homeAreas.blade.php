@extends('layouts.app')
    @section('content')
        <div class="container-fluid mt-4">
            <h2 class="">Bienvenido {{Auth::user()->name}}</h2>
            <p>Areas Registradas para esta empresa:</p>
            <hr>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Empresas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Áreas</li>
                </ol>
            </nav>            
            <div class="container">
                <div class="row align-justify-center">
                    @if(count($areas) > 0)
                        @foreach($areas as $area)
                        <div class="col-xl-3 col-md-6 mb-4">                    
                            <a href="/chivos/{{$area->id}}">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        {{$area->name}}
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-puzzle-piece fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </a>                                       
                        </div>
                        @endforeach
                    @else
                        <div class="col my-4 align-items-center">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">No posee Áreas registradas ahún</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Comuniquese con el administrador</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
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
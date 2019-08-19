@extends('layouts.app')

@section('content')
<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="">Bienvenido {{Auth::user()->name}}</h2>
            <hr>
            @role('user')
            <p>Empresas Registradas a este usuario:</p>

            <div class="row">
                @if(count($comps) > 0)
                    @foreach($comps as $comp)
                    <div class="col-xl-3 col-md-6 mb-4">                    
                        <a href="/areas/{{$comp->id}}">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    {{$comp->name}}
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
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">No posee Empresas registradas ahún</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Comuniquese con el administrador</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                @endif
            </div>
            @endrole
            @role('admin')
            admin dashboard
            @endrole
        </div>
    </div>
</div>
@endsection



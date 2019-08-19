@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Empresas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Áreas</li>
      <li class="breadcrumb-item active" aria-current="page">Documentos</li>
    </ol>
  </nav>
<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Bienvenido. {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ Auth::user()->roles }} --}}
                    {{-- {{$roles = Auth::user()->getRoleNames()}} --}}
                    {{-- {{Auth::user()->id}} --}}
                    {{-- <companies-front-component></companies-front-component> --}}
                    @foreach($fils as $file)
                    <a href="/public/files/{{$file->route}}">{{$file->name}}</a>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
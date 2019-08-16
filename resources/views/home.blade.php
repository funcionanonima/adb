@extends('layouts.app')

@section('content')
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
                    <companies-front-component></companies-front-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

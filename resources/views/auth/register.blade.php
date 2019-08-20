@extends('layouts.app')
    @section('content')
        <div class="container-fluid mt-4">
            <h2 class="">Control Usuarios</h2>
            <hr>
            <div class="row">
                <div class="col-2 p-0">
                    @include('layouts.nav')
                </div>
                <div class="col-10">
                    <users-component></users-component>
                </div>
            </div>
        </div>
    @endsection


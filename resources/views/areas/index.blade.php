@extends('layouts.app')
    @section('content')
        <div class="container-fluid mt-4">
            <div class="container">
                <h2 class="">Areas</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-2 p-1">
                    @include('layouts.nav')
                </div>
                <div class="col-10">
                    <areas-component></areas-component>
                </div>
            </div>
        </div>
@endsection
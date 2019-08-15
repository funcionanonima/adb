@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="/documents" enctype="multipart/form-data">
                {{-- @csrf --}}
                <div class="form-group">
                        <input type="text" name="name"placeholder="nombre">
                </div>
                <div class="form-group">
                        <input type="number" name="area_id" placeholder="area id">
                </div>
                <div class="form-group">
                        <input type="file" name="file" placeholder="archivo">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>             
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <ul>
            @foreach($documents as $document)
            <li>{{$document->name}}</li><a href="">Link</a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
        <h2 class="">Control Documentos</h2>
        <hr>
        <div class="row">
            <div class="col-2 p-0">
                @include('layouts.nav')
            </div>
            <div class="col-10">
                
                    <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <form method="POST" action="/documents" enctype="multipart/form-data">
                                        @csrf
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
                                    <li>{{$document->name}}</li><a href="/files/{{$document->route}}">Link</a>
                                    <div style="max-height: 150px;" class="text-center">
                                        <img style="max-height: inherit"src="/files/{{$document->route}}" alt="">
                                    </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

            </div>
        </div>
    </div>
@endsection
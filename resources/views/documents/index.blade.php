@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4">
        <h2 class="">Control Documentos (EN CONSTRUCCION)</h2>
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
                                        <div class="form-group border-dark">
                                            <div class="text-danger">(SI DESEA AGREAGR ESTE CAMPO, ASEGURESE QUE EL ID DEL AREA SI EXISTA)</div>
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
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Area</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Preview</th>
                                            <th>Descargar</th>
                                            <th>Acciones</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($documents as $document)
                                        <tr>
                                            <td>{{$document->id}}</td>
                                            <td>{{$document->area_id}}</td>
                                            <td>{{$document->name}}</td>
                                            <td>{{$document->body}}</td>
                                            <td>
                                                <div style="max-height: 150px;" class="text-center">
                                                    <img style="max-height: inherit"src="/files/{{$document->route}}" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="/files/{{$document->route}}">{{$document->name}}</a>
                                            </td>
                                            <td class="content-justify-rigth">
                                            <!-- <td><button class="btn btn-sm btn-success">Ver</button> -->
                                            <button class="btn btn-sm btn-warning">Editar</button>
                                            <button class="btn btn-sm btn-danger">Borrar</button></td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

            </div>
        </div>
    </div>
@endsection
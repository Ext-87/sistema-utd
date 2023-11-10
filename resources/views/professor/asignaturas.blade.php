@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1  style="font-size: 20px"></h1>
@stop
@section('css')
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
@stop

@section('content')
<main style="display: flex; flex-wrap:wrap; justify-content:space-between">
   <div class="card" style="width: 60%;">
    <div class="card-header">
        <h5>Resumen de Asignaturas</h5>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            @foreach ($regulares as $regular)
                <li class="list-group-item py-0 px-4"><a style="color:#000; text-transform:capitalize;" href="{{route('professor.regular.data', $regular)}}">{{$regular->regular_name}} <b style="text-transform: uppercase; font-weight:400;">{{$regular->regular_trayecto}}</b></a></li>
            @endforeach
        </ul>
        
    </div>
   </div>
</main>
@stop
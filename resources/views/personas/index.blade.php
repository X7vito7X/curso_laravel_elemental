@extends('layouts.plantilla')
@section('titulo','Mostrar personas')
@section('contenido')
    <h1>Bienvenido al área de listado de personas</h1>
    <a href="{{route('personas.create')}}">Crear personas</a>
    <ul>
        @foreach ($personas as $persona)
            <li>
                <a href="{{route('personas.show',$persona)}}">{{$persona->nombre}}</a>
            </li>

        @endforeach
    </ul>
    {{$personas->links()}}
@endsection

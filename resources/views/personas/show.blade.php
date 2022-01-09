@extends('layouts.plantilla')
@section('titulo','Detalle persona')
@section('contenido')
    <a href="{{route('personas.index')}}">Volver</a><br />
    <a href="{{route('personas.edit',$persona)}}">Editar persona</a>
    <h1>información personal de: {{$persona->nombre}}</h1>
    <p><strong>Cedula: </strong>{{$persona->cedula}}</p>
    <p><strong>Nombre: </strong>{{$persona->nombre}}</p>
    <p><strong>Apellido: </strong>{{$persona->apellido}}</p>
    <p><strong>Fijo: </strong>{{$persona->fijo}}</p>
    <p><strong>Celular: </strong>{{$persona->celular}}</p>
    <p><strong>Direccion: </strong>{{$persona->direccion}}</p>
    <p><strong>Municipio: </strong>{{$persona->municipio}}</p>
    <p><strong>Barrio: </strong>{{$persona->barrio}}</p>
    <p><strong>Fecha de nacimiento: </strong>{{$persona->fechanac}}</p>
    <p><strong>Estado civil: </strong>{{$persona->estcivil}}</p>
    <p><strong>Email: </strong>{{$persona->email}}</p>

    <form action="{{route('personas.destroy',$persona)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection

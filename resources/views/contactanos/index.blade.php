@extends('layouts.plantilla')
@section('titulo','Contactanos')
@section('contenido')
    <h1>Déjanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        @error('nombre')
            <br>
                <strong><small>*{{$message}}</small></strong>
            <br>
        @enderror
        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        @error('correo')
            <br>
                <strong><small>*{{$message}}</small></strong>
            <br>
        @enderror
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>
        @error('mensaje')
            <br>
                <strong><small>*{{$message}}</small></strong>
            <br>
        @enderror
        <button type="submit">Enviar mensaje</button>
    </form>
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection

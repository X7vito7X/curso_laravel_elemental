@extends('layouts.plantilla')
@section('titulo','Crear persona')
@section('contenido')
    <h1>Bienvenido al área de creación de personas</h1>
    <form action="{{route('personas.store')}}" method="POST">
        @csrf
        <label>
            Cedula:
            <br />
            <input type="text" name="cedula" value="{{old('cedula')}}">
        </label>
        @error('cedula')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Nombre:
            <br />
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Apellido:
            <br />
            <input type="text" name="apellido" value="{{old('apellido')}}">
        </label>
        @error('apellido')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Fijo:
            <br />
            <input type="text" name="fijo" value="{{old('fijo')}}">
        </label>
        @error('fijo')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Celular:
            <br />
            <input type="text" name="celular" value="{{old('celular')}}">
        </label>
        @error('celular')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Direccion:
            <br />
            <input type="text" name="direccion" value="{{old('direccion')}}">
        </label>
        @error('direccion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Municipio:
            <br />
            <input type="text" name="municipio" value="{{old('municipio')}}">
        </label>
        @error('municipio')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Barrio:
            <br />
            <input type="text" name="barrio" value="{{old('barrio')}}">
        </label>
        @error('barrio')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Fecha de nacimiento:
            <br />
            <input type="date" name="fechanac" value="{{old('fechanac')}}">
        </label>
        @error('fechanac')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Estado civil:
            <br />
            <input type="text" name="estcivil" value="{{old('estcivil')}}">
        </label>
        @error('estcivil')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <label>
            Email:
            <br />
            <input type="text" name="email" value="{{old('email')}}">
        </label>
        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <button type="submit">Crear</button>
    </form>
@endsection

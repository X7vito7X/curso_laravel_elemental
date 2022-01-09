@extends('layouts.plantilla')
@section('titulo','Editar persona')
@section('contenido')
    <h1>Bienvenido al área de edicion de personas</h1>
    <form action="{{route('personas.update',$persona)}}" method="POST">
        <!-- ESTA DIRECTIVA ME AYUDA A ENVIAR EL TOKEN DE SEGURIDAD -->
        @csrf
        <!-- ESTA DIRECTIVA ME AYUDA A INDICAR QUE SE USARÁ EL MÉTODO PUT -->
        @method('put')
        <label>
            Cedula:
            <br />
            <input type="text" name="cedula" value="{{old('cedula',$persona->cedula)}}">
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
            <input type="text" name="nombre" value="{{old('nombre',$persona->nombre)}}">
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
            <input type="text" name="apellido" value="{{old('apellido',$persona->apellido)}}">
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
            <input type="text" name="fijo" value="{{old('fijo',$persona->fijo)}}">
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
            <input type="text" name="celular" value="{{old('celular',$persona->celular)}}">
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
            <input type="text" name="direccion" value="{{old('direccion',$persona->direccion)}}">
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
            <input type="text" name="municipio" value="{{old('municipio',$persona->municipio)}}">
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
            <input type="text" name="barrio" value="{{old('barrio',$persona->barrio)}}">
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
            <input type="date" name="fechanac" value="{{old('fechanac',$persona->fechanac)}}">
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
            <input type="text" name="estcivil" value="{{old('estcivil',$persona->estcivil)}}">
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
            <input type="text" name="email" value="{{old('email',$persona->email)}}">
        </label>
        @error('email')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br />
        <br />
        <button type="submit">Actualizar</button>
    </form>
@endsection

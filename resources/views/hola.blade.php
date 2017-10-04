@extends('layouts.master')

@section('title', 'Hola')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('titulo')
    <h1>Hola</h1>
    <p>Esto usa Bootstrap</p>
@stop

@section('content')
    <a href="adios">Hola Mundo!</a>
    <hr/>

    <form action="adiosGet" method="get">
        {!! csrf_field() !!}
        Nombre: <input type="text" name="nombre"><br>
        <input type="submit">
    </form>
    <hr/>

    <form action="adiosPost" method="post">
        {!! csrf_field() !!}
        Telefono: <input type="text" name="telefono"><br>
        <input type="submit">
    </form>
    <hr/>

    <form action="adiosPostDatos" method="post">
        {!! csrf_field() !!}
        Datos: <input type="text" name="datos1"><br>
        <input type="submit">
    </form>
    <hr/>

    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Oops! Something went wrong</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="datosBBDD" method="post">
        {!! csrf_field() !!}
        Guardar en BBDD: <input type="text" name="datos"><br>
        <input type="submit">
    </form>
    <hr/>
@stop
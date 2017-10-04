@extends('layouts.master')

@section('title', 'Datos')

@section('titulo')
    <h1>Los datos enviados son: <?php echo $_POST["datos1"]; ?></h1>
@stop

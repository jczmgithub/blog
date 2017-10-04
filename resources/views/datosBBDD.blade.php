@extends('layouts.master')

@section('title', 'DatosBBDD')

@section('titulo')
    <h1>Los datos enviados a la BBDD son: <?php echo $_POST["datos"]; ?></h1>
@stop

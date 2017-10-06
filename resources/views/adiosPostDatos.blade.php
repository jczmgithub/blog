@extends('layouts.master')

@section('title', 'Datos')

@section('titulo')
    <h1>Los datos enviados son: <?php echo $_POST["datos"]; ?></h1>
@endsection

@section('content')
    <img src="images/bobOk.jpeg" alt="Bob Ok" class="img-responsive">
@endsection

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>Hola</title>

    </head>
    <body>

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
		Datos: <input type="text" name="datos"><br>
		<input type="submit">
	</form>
	<hr/>

	<form action="datosBBDD" method="post">
		{!! csrf_field() !!}
		Guardar en BBDD: <input type="text" name="datosBBDD"><br>
		<input type="submit">
	</form>
	<hr/>

    </body>
</html>

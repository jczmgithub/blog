<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>DatosBBDD</title>

    </head>
    <body>
    <?php
    use App\modeloDatos;
    $data = new modeloDatos;
    $data->datos = $_POST["datosBBDD"];
    $data->save();
    ?>

	Los datos enviados a la BBDD son: <?php echo $_POST["datosBBDD"]; ?>

    </body>
</html>

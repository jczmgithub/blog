<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>DatosBBDD</title>

    </head>
    <body>

    <?php
            /*
        use Illuminate\Http\Request;
        $this->validate(request(),['Nombre'=>"bail|required|string|max:20",]);
        $request->validate([
            'datosBBDD' => 'bail|required|max:20',
        ]);

        use App\modeloDatos;
        $data = new modeloDatos;
        $data->datos = $_POST["datosBBDD"];
        $data->save();
            */
    ?>

	Los datos enviados a la BBDD son: <?php echo $_POST["datos"]; ?>

    </body>
</html>

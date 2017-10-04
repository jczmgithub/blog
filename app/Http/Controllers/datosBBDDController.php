<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloDatos;

class datosBBDDController extends Controller
{
    public function insertarDatosBBDD(){
        $this->validate(request(),['datos'=>"bail|required|string|max:20",]);

        modeloDatos::create(request()->all());

        return view('datosBBDD');
    }
}

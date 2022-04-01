<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rutauno_model;

class rutauno_controller extends Controller
{
    public function index()
    {
        $rutauno = new rutauno_model();
        $origen_uno = $_GET['origen1'];
        $destino_uno = $_GET['destino1'];
        $fecha_uno = $_GET['fecha1'];

        $rutauno->origen = $origen_uno;
        $rutauno->destino = $destino_uno;
        $rutauno->fecha = $fecha_uno;
        $rutauno->save();

        return view('vista.index');
    }
}

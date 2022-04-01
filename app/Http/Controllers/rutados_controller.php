<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\rutados_model;

class rutados_controller extends Controller
{
    public function index()
    {
        $rutados = new rutados_model();
        $origen_dos = $_GET['origen2'];
        $destino_dos = $_GET['destino2'];
        $fecha_dos = $_GET['fecha2'];

        $rutados->origen = $origen_dos;
        $rutados->destino = $destino_dos;
        $rutados->fecha = $fecha_dos;
        $rutados->save();

        return view('vista.index');
    }
}

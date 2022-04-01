<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rutatres_model;

class rutatres_controller extends Controller
{
    public function index()
    {
        $rutatres = new rutatres_model();
        $origen_tres = $_GET['origen3'];
        $destino_tres = $_GET['destino3'];
        $fecha_tres = $_GET['fecha3'];

        $rutatres->origen = $origen_tres;
        $rutatres->destino = $destino_tres;
        $rutatres->fecha = $fecha_tres;
        $rutatres->save();

        return view('vista.index');
    }
}

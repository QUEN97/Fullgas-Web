<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    public function index()
    {
        return view('modules.ubicaciones.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicenciaFullgas extends Controller
{
    public function index()
    {
        return view('modules.licencia_fullgas.index');
    }
}

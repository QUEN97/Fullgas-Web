<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscuderiaController extends Controller
{
    public function index()
    {
        return view('modules.escuderia.index');
    }
}

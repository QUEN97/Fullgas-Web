<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuenTratoController extends Controller
{
    public function index()
    {
        return view('modules.buen_trato.index');
    }
}

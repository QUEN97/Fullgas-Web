<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('modules.contacto.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'motivo' => 'required',
        ],
        [
            'nombre.required' => 'El nombre es obligatorio',
            'correo.required' => 'El correo electrónico es obligatorio',
            'correo.email' => 'El correo electrónico no es válido',
            'motivo.required' => 'El motivo es obligatorio',
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('tu-email@destino.com')->send($correo); 

        return response()->json(['success' => true]);

    }
}

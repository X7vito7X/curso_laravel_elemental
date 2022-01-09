<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    //! Muestra el formulario de contacto.
    public function index()
    {
        return view('contactanos.index');
    }
    //! Procesa el formulario y envia el correo electrónico
    public function store(Request $request)
    {
        $request->validate
        ([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);
        $correo = new ContactanosMailable($request->all());
        Mail::to('andresleon90s@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado'); //! Esto se llama mensaje de Sesión.
    }
}

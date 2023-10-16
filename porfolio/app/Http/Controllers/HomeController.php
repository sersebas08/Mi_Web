<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function consultas()
    {
        return view('consultas');
    }

    public function create(Request $request)
    {
        /*dd('Hola mundo');*/
        $request->validate(Consultas::VALIDAR_INGRESO_NOTICIAS, Consultas::MENSAJE_VALIDAR_INGRESO_NOTICIAS);



        Consultas::create([
            'name' => $request->name,
            'email' => $request->email,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()
            ->route('home')
            ->with('status.message', 'El mensaje fue enviado exitosamente. Pronto me pondré en contacto contigo al email ' . ' ' .  $request->email . ' ')
            ->with('status.type', 'success');
    }
}

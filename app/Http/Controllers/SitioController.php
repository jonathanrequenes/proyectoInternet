<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function bienvenida($nombre = null, $apellido = null)
    {
      $edad = 40;
      $nombre = strtoupper($nombre);
      $apellido = strtoupper($apellido);
      return view('landing-page', compact('nombre', 'apellido', 'edad'));
    }

    public function contacto()
    {
      return view('contacto');
    }

    public function guardaContacto(Request $request){
      //Recibir
      //Validar
      //Guardar
      //Salir
    }
}

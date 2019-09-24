<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contacto;

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
      /*DB::table('contactos')->insert([
        'correo' => $request->input('correo'),
        'comentario' =>$request->comentario,
        'created_at' => now(),
        'updated_at' => now()
      ]);*/

      /*Modelo 1
      $contacto = new Contacto();
      $contacto->correo = $request->correo;
      $contacto->comentario = $request->comentario;
      $contacto->save();*/

      /*Modelo 2
      Contacto::create([
        'correo' => $request->correo,
        'comentario' => $request->comentario,
      ]);*/

      Contacto::create($request->all());

      return redirect()->route('ver-mensajes');
      //Validar
      //Guardar
      //Salir
    }

    public function verMensajes(){
      /*Sin Modelo
      $mensajes=DB::table('contactos')->get();
      return view('ver-mensajes', compact('mensajes'));*/

      $mensajes=Contacto::all();
      return view('ver-mensajes', compact('mensajes'));
    }
}

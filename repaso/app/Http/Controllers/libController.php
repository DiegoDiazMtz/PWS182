<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLib;


class libController extends Controller
{
    public function metodoInicio(){
        return view('inicio');
    }

    public function metodoRegistro(){
        return view('registro');
    }
    
    public function metodoGuardar(validadorFormLib $req){

        return redirect('/registro')->with('confirmacion', 'Tu Registro se guardó correctamente!');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contacto_re;
use App\Models\Contacto;

class contactoController extends Controller
{
    public function div(){
        return view('division');
       
    }

    public function index(){
        return view('contacto_p');
       
    }

    public function inicio(){
        return view('welcome');
       
    }

    public function pro(){
        return view('productos');
       
    }

public function sobrenos(){
    return view('sobrenosotros');
   
}
    public function store(contacto_re $request ){
    
        $saved = Contacto :: create($request->all());
        if($saved){
             return redirect('contacto')->with('status', 'Tu mensaje a sido enviado correctamente');
        }
        return redirect()->hack()->withImput()->withErrors('no  se envio tu mensaje vuelva intentar');
    }
}

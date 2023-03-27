<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contacto_re;
use App\Models\Contacto;

class contactoController extends Controller
{
    public function index(){
        return view('contacto_p');
       
    }
    public function store(contacto_re $request ){
    
        $saved = Contacto :: create($request->all());
        if($saved){
             return redirect('contacto')->with('status', 'Tu mensaje a sido enviado correctamente');
        }
        return redirect()->hack()->withImput()->withErrors('no  se envio tu mensaje vuelva intentar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovaConsultaController extends Controller
{
    public function index(){
        return view('site.nova_consulta');
    }

    public function create(Request $request){
        $nova_consulta = $request->input();
        echo implode($nova_consulta);
   }
}

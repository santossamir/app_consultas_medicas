<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        return view('site.pacientes');
    }

    public function create(Request $request){
        $novo_paciente = $request->input();
        echo implode($novo_paciente);
   }
}

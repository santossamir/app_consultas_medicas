<?php

namespace App\Http\Controllers;

use App\Models\Medicos;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
   public function index(){
    $medicos = Medicos::all();
        return view('site.medicos', ['medicos' => $medicos]);
   }

    public function create(Request $request){
        $new_medico = $request->all();

        $medico = new Medicos();
        $medico->name = $new_medico['name'];
        $medico->especialidade_id = $new_medico['especialidade'];
        $medico->crm = $new_medico['crm'];
        $medico->save();

        return redirect()->route('index/medicos');
   }
}

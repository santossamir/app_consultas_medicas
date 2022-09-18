<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Consultas;
use App\Models\Medicos;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class NovaConsultaController extends Controller
{
    public function index(){

        $consultas = DB::table('consultas')
        ->leftjoin('pacientes','paciente_id', '=' , 'pacientes.id','=', 'pacientes.nome')
        ->leftjoin('medicos','medico_id', '=' , 'medicos.id','=', 'medicos.name',)
        ->select('consultas.id', 'consultas.paciente_id', 'pacientes.nome', 'consultas.medico_id', 'consultas.agendamento', 'medicos.name')
        ->get();

        $pacientes = Pacientes::all();
        $medicos = Medicos::all();

        return view('site.nova_consulta', ['consultas' => $consultas, 'pacientes' => $pacientes, 'medicos' => $medicos]);

    }

    public function create(Request $request){
        $nova_consulta = $request->all();

        $medico = new Consultas();
        $medico->paciente_id = $nova_consulta['paciente_id'];
        $medico->medico_id = $nova_consulta['medico_id'];
        $medico->agendamento = $nova_consulta['agendamento'];
        $medico->save();

        return redirect()->route('index/nova-consulta');
   }
}

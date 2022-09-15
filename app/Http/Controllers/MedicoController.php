<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Medicos;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
   public function index(){
    $medicos = DB::table('medicos')
    ->leftjoin('especialidades','especialidade_id', '=' , 'especialidades.id','=', 'especialidades.especialidade')
    ->select('medicos.name', 'medicos.crm', 'medicos.especialidade_id', 'especialidades.especialidade')
    ->get();
    $especialidades = Especialidade::all();
        return view('site.medicos', ['medicos' => $medicos], ['especialidades' => $especialidades]);
   }

    public function create(Request $request){
        $new_medico = $request->all();

        $medico = new Medicos();
        $medico->name = $new_medico['name'];
        $medico->especialidade_id = $new_medico['especialidade_id'];
        $medico->crm = $new_medico['crm'];
        $medico->save();

        return redirect()->route('index/medicos');
   }
}

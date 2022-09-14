<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    public function index(){
        $especialidades = Especialidade::all();
        return view('site.home', ['especialidades' => $especialidades]);
    }

    public function create(Request $request){
        $new_especialidade = $request->input('nome_especialidade');

        $especialidade = new Especialidade();
        $especialidade->especialidade = $new_especialidade;
        $especialidade->save();

        return redirect()->route('index');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacientes;

class PacienteController extends Controller
{
    public function index(){

       $pacientes = Pacientes::all();

        return view('site.pacientes', ['pacientes' => $pacientes]);

    }

   public function create(Request $request){
    $novo_paciente = $request->all();

    $paciente =  new Pacientes();
    $paciente->nome = $novo_paciente['nome'];
    $paciente->cpf = $novo_paciente['cpf'];
    $paciente->nascimento = $novo_paciente['nascimento'];
    $paciente->contato = $novo_paciente['contato'];
    $paciente->email = $novo_paciente['email'];
    $paciente->cep = $novo_paciente['cep'];
    $paciente->endereco = $novo_paciente['endereco'];
    $paciente->num = $novo_paciente['num'];
    $paciente->save();

    return redirect()->route('index/pacientes');
    }
}

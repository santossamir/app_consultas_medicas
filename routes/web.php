<?php

use App\Http\Controllers\EspecialidadeController;
use App\Models\Especialidade;
use Illuminate\Support\Facades\Route;


Route::get('/', 'EspecialidadeController@index')->name('index');
Route::post('/especialidade/create', 'EspecialidadeController@create');

Route::get('/medicos', 'MedicoController@index')->name('index/medicos');
Route::post('/medicos/create', 'MedicoController@create');

Route::get('/pacientes', 'PacienteController@index')->name('index/pacientes');
Route::post('/pacientes/create', 'PacienteController@create');

Route::get('/nova-consulta', 'NovaConsultaController@index');
Route::post('/nova-consulta/create', 'NovaConsultaController@create');

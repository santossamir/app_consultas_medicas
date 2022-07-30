<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('site.home');
});

Route::get('/medicos', function () {
    return view('site.medicos');
});

Route::get('/pacientes', function () {
    return view('site.pacientes');
});

Route::get('/nova-consulta', function () {
    return view('site.nova_consulta');
});

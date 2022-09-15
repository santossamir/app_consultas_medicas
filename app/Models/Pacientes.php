<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $table = "pacientes";
    protected $primaryKey = "id";
    public $timestamps = false;
}

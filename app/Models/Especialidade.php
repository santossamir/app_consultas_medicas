<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = "especialidades";
    protected $primaryKey = "id";
    public $timestamps = false;
}

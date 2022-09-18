<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('medico_id');
            $table->ipAddress('agendamento');

            //Constraint de relacionamento

            //1 - Table pacientes
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unique('paciente_id');

            //2 - Table medicos
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->unique('medico_id');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}

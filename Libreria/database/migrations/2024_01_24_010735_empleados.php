<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('empresa_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('CC');
            $table->string('nomina');
            $table->string('faltas');
            $table->string('devengado');
            $table->string('deducciones');
            $table->string('percepciones');
            $table->timestamps();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

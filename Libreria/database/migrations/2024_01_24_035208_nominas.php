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

        Schema::create('nominas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('empleados_id')->unsigned();
            $table->bigInteger('convenios_id')->unsigned();
            $table->timestamps();
            $table->foreign('empleados_id')->references('id')->on('empleados')->onDelete("cascade");
            $table->foreign('convenios_id')->references('id')->on('convenios')->onDelete("cascade");
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

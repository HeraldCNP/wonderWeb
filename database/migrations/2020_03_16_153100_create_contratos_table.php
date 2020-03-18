<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPersona');
            $table->unsignedBigInteger('idTrabajo');
            $table->unsignedBigInteger('idPrecio');
            $table->unsignedBigInteger('idUser');
            $table->date('dateDelivery')->nullable();
            $table->double('advance','8', '2')->nullable();
            $table->string('observation')->nullable();
            $table->boolean('state')->default(0);

            $table->foreign('idPersona')->references('id')->on('personas');
            $table->foreign('idTrabajo')->references('id')->on('trabajos');
            $table->foreign('idPrecio')->references('id')->on('precios');
            $table->foreign('idUser')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}

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
        //Se crea tabla para los tipos de hackers
        Schema::create('tipos_hackers', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('tipo_hacker');
            $table->longText('imagen');
            $table->longText('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //Funcion que eliminara la tabla tipos_hackers en caso de que ya exista
    public function down()
    {
        Schema::dropIfExists('tipos_hackers');
    }
};

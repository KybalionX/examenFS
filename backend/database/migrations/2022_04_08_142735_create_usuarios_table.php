<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ciudad_nacimiento');
            $table->foreign('ciudad_nacimiento')->references('id')->on('ciudades');
            $table->unsignedBigInteger('tipo_documento');
            $table->foreign('tipo_documento')->references('id')->on('tipos_documentos');
            $table->string("documento");
            $table->string("nombres");
            $table->string("apellidos");
            $table->date("fecha_nacimiento");
            $table->string("correo");
            $table->string("contrasenia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('usuarios');
    }
}

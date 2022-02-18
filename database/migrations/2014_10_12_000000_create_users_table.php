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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('rol');
            $table->date('fechaNac');
            $table->string('password');
            //$table->unsignedBigInteger('idRol');  //El nombre de una fk tiene un nombre en concreto.
            //$table->foreign('idRol')->references('id')->on('rol');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('imagen');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

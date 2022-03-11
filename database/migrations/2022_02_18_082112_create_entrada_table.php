<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idFestival');  //El nombre de una fk tiene un nombre en concreto.
            $table->foreign('idFestival')->references('id')->on('festival');
            $table->unsignedBigInteger('idUser')->nullable();  //El nombre de una fk tiene un nombre en concreto.
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('entrada');
    }
};

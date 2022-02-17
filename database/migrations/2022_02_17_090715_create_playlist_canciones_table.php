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
        Schema::create('plCanc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playlist_id');  //El nombre de una fk tiene un nombre en concreto.
            $table->foreign('playlist_id')->references('id')->on('playlist');
            $table->unsignedBigInteger('cancion_id');  //El nombre de una fk tiene un nombre en concreto.
            $table->foreign('cancion_id')->references('id')->on('cancion');
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
        Schema::dropIfExists('plCanc');
    }
};

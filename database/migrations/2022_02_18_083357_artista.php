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
        Schema::create('artista', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->year('anio');
            $table->boolean('esGrupo');
            $table->string('foto');
            $table->string('estilo');
            $table->text('descripcion');
            $table->unsignedBigInteger('idFestival')->nullable();;
            $table->foreign('idFestival')->references('id')->on('festival');
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
        //
    }
};

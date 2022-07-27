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
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id()->comment('Identificador único del registro');
                $table->string('name', 100)->comment('Nombre de la Ciudad');
                $table->foreignId('estados_id')->references('id')->on('estados')->onDelete('restrict')->onUpdate('cascade');
                $table->nullableMorphs('citiable');
                $table->timestamps();
                $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
                $table->unique(['estados_id', 'name'])->comment('Clave única para el registro');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
};

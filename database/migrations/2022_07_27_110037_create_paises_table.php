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

    /**
     * Método que ejecuta las migraciones
     *
     * @author GLINYER FRANCO <gfrancojf@gmail.com> 
     */

        Schema::create('paises', function (Blueprint $table) {
            $table->id()->comment('Identificador único del registro');
            $table->string('name', 100)->comment('Nombre del Pais');
            $table->string('prefix', 3)->comment('Prefijo único del Pais');
            $table->timestamps();
            $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
            $table->unique(['name', 'prefix'])->comment('Clave única para el registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paises');
    }
};

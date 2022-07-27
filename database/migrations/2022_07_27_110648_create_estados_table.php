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
        Schema::create('estados', function (Blueprint $table) {
            $table->id()->comment('Identificador único del registro');
            $table->string('name', 100)->comment('Nombre del Estado');
            $table->string('code', 10)->nullable()->comment('Código que identifica al Estado');
            $table->foreignId('paises_id')->references('id')->on('paises')->onDelete('restrict')->onUpdate('cascade');


           
            $table->timestamps();
            $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
            $table->unique(['paises_id', 'name'])->comment('Clave única para el registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
};

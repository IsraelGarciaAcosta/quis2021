<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosCeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formatos_ce', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_formato_id');
            $table->json('datos_json')->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->unsignedBigInteger('proyecto_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('documento_formato_id')->references('id')->on('documentos_ce_formatos')
                ->onUpdate('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')
                ->onUpdate('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')
                ->onUpdate('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formatos_ce');
    }
}

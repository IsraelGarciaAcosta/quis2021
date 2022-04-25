<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosCeFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_ce_formatos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_doc');
            $table->string('directorio');
            $table->string('format');
            $table->boolean('has_form')->nullable()->default();
            $table->unsignedBigInteger('area_id')->nullable();
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
        Schema::dropIfExists('documentos_ce_formatos');
    }
}

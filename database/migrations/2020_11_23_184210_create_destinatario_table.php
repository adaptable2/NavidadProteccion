<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinatarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Destinatario', function (Blueprint $table) {
            $table->id();
            $table->string('correo_remitente')->nullable();
            $table->string('nombre_destinatario')->nullable();
            $table->string('correo_destinatario')->nullable();
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
        Schema::dropIfExists('Destinatario');
    }
}

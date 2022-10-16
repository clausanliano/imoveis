<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo_logradouro')->nullable();
            $table->string('logradouro');
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('CEP');
            $table->string('municipio');
            $table->text('observacao')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
};

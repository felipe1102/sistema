<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_endereco')->nullable()->unsigned();
            $table->foreign('id_endereco')->references('id')->on('enderecos');

            $table->string('nome');
            $table->integer('cnpj');
            $table->string('telefone_fixo');
            $table->string('telefone_celular');
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
        Schema::dropIfExists('empresas');
    }
}

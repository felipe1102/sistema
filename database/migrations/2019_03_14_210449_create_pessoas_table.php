<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('id_endereco')->nullable()->unsigned();
            $table->foreign('id_endereco')->references('id')->on('enderecos');

            $table->integer('id_empresa')->nullable()->unsigned();
            $table->foreign('id_empresa')->references('id')->on('empresas');

            $table->integer('id_tipo')->nullable()->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipo_pessoas');

            $table->string('nome');
            $table->integer('rg');
            $table->string('orgao');
            $table->integer('cpf');
            $table->integer('telefone_fixo');
            $table->integer('telefone_celular');
            $table->string('url_foto');
            $table->string('descricao');



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
        Schema::dropIfExists('pessoas');
    }
}

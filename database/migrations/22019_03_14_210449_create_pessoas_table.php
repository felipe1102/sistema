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

            $table->unsignedBigInteger('id_endereco')->nullable();
            $table->foreign('id_endereco')->references('id')->on('enderecos');

            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->foreign('id_empresa')->references('id')->on('empresas');

            $table->unsignedBigInteger('id_tipo')->nullable();
            $table->foreign('id_tipo')->references('id')->on('tipo_pessoas');

            $table->string('nome');
            $table->integer('rg');
            $table->string('orgao');
            $table->integer('cpf');
            $table->integer('telefone_fixo');
            $table->integer('telefone_celular');
            $table->string('url_foto');
            $table->text('descricao');



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

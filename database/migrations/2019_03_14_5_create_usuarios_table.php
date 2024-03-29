<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_empresa')->nullable();
            $table->foreign('id_empresa')->references('id')->on('empresas');

            $table->unsignedBigInteger('id_pessoa')->nullable();
            $table->foreign('id_pessoa')->references('id')->on('pessoas');

            $table->string('nome');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha');
            $table->boolean('master')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}

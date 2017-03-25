<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeEmpresa');
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('endereco')->nullable();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->text('mapa')->nullable();
            $table->string('email')->nullable();
            $table->string('link')->nullable();
            $table->text('twitter')->nullable();
            $table->text('facebook')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
            $table->string('textoInicialSobre')->nullable();
            $table->string('itemMenu1')->nullable();
            $table->string('itemMenu2')->nullable();
            $table->string('itemMenu3')->nullable();
            $table->string('itemMenu4')->nullable();
            $table->string('itemMenu5')->nullable();
            $table->string('usuario_inclusao')->nullable();
            $table->string('usuario_alteracao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configuracoes');
    }
}

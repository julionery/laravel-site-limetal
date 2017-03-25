<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->string('titulo');
            $table->string('descricao');
            $table->text('imagem');
            $table->string('endereco')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('detalhes')->nullable();
            $table->text('mapa')->nullable();
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar',['sim', 'nao'])->default('nao');
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
        Schema::drop('portfolios');
    }
}

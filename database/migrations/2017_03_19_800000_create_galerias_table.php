<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('portfolio_id')->unsigned();
            $table->foreign('portfolio_id')->references('id')->on('portfolios');
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('imagem');
            $table->string('ordem')->nullable();
            $table->enum('publicado', ['sim', 'nao'])->default('nao');
            $table->enum('posicao_entrada', ['center-align','left-align','right-align'])->default('center-align');
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
        Schema::drop('galerias');
    }
}

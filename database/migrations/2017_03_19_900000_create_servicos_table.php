<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->text('imagem');
            $table->string('detalhes')->nullable();
            $table->text('texto')->nullable();
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
        Schema::drop('servicos');
    }
}

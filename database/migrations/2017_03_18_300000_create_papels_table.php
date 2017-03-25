<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('usuario_inclusao')->nullable();
            $table->string('usuario_alteracao')->nullable();
            $table->timestamps();
        });

        Schema::create('papel_permissao', function (Blueprint $table) {
            $table->integer('permissao_id')->unsigned();
            $table->integer('papel_id')->unsigned();
            $table->primary(['permissao_id','papel_id']);

            $table->timestamps();
        });

        Schema::create('papel_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('papel_id')->unsigned();
            $table->primary(['user_id','papel_id']);
            $table->timestamps();
        });

        Schema::table('papel_permissao', function($table){
            $table->foreign('permissao_id')->references('id')->on('permissaos')->onDelete('cascade');
            $table->foreign('papel_id')->references('id')->on('papels')->onDelete('cascade');
        });

        Schema::table('papel_user', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('papel_id')->references('id')->on('papels')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('papel_user');
        Schema::drop('papel_permissao');
        Schema::drop('papels');
    }
}

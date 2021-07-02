<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subcategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->integer('status');
            $table->string('imagem');
            $table->integer('id_categoria');
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
        //
        Schema::drop('subcategorias');
    }
}

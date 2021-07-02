<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produtos_pedido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_produto');
            $table->integer('id_pedido');
            $table->integer('quantidade');
            $table->text('atributos');
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
        Schema::drop('produtos_pedido');
    }
}

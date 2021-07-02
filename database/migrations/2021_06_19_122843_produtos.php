<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('peso');
            $table->string('largura');
            $table->string('altura');
            $table->string('preco');
            $table->string('destaque');
            $table->string('status');
            $table->string('id_categoria');
            $table->string('id_subcategoria');
            $table->string('estoque');
            $table->string('estoque_min');
            $table->string('title_seo');
            $table->string('keywords_seo');
            $table->string('description_seo');
            $table->string('ncm');
            $table->string('estoque');
            $table->string('sku');
            $table->string('barcode');
            $table->string('imagem');
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
        Schema::drop('produtos');
    }
}

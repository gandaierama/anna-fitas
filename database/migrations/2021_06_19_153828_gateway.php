<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gateway extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gateways', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('url');
            $table->string('method');
            $table->string('body');
            $table->string('header1');
            $table->string('header2');
            $table->string('header3');
            $table->string('status');
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
        Schema::drop('gateways');
    }
}

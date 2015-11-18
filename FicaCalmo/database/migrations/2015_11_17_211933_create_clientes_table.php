<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->integer('telefone');
            $table->string('email')->unique();
            $table->integer('nuit');
            $table->integer('casa');
            $table->integer('quarteirao');
            $table->integer('distrito_id')->unsigned();
            $table->integer('bairro_id')->unsigned();
            $table->timestamps();
            $table->foreign('distrito_id')
                    ->references('id')->on('distritos')
                    ->onDelete('cascade');
            $table->foreign('bairro_id')
                    ->references('id')->on('bairros')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('clientes');
    }

}

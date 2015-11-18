<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pizza');
            $table->float('preco');
             $table->binary('image');
            $table->integer('categoria_id')->unsigned();
            $table->integer('ingrediente_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')
                    ->references('id')->on('categorias')
                    ->onDelete('cascade');
            $table->foreign('ingrediente_id')
                    ->references('id')->on('ingredientes')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pizzas');
    }
}

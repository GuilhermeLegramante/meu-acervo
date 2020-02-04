<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titulo');
            $table->string('autor');
            $table->date('dataAquisicao')->nullable();
            $table->char('genero', 100)->nullable();
            $table->double('valor', 4, 2)->nullable();
            $table->string('observacoes')->nullable();
            $table->enum('lido', ['sim', 'nao']);
            $table->enum('tipo', ['fisico', 'ebook']);
            $table->string('sinopse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro');
            $table->string('numero', 20)->nullable();
            $table->string('complemento',100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();

            $table->integer('contato_id')->unsigned();
            $table->foreign('contato_id')->references('id')->on('contatos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}

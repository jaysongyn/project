<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->primary(['numero','empresa_id']);
            $table->integer('numero');
            $table->dateTime('data_emissao');
            $table->float('valor');
            $table->text('discriminacao');
            $table->integer('cpf_tomador');
            $table->string('nome_tomador');
            $table->string('cpf_dependente');
            $table->string('nome_dependente');
            $table->date('data_nasc_dependente');
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');

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
        Schema::drop('notas');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateClientesTable.
 */
class CreateClientesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('localizacao_id');

            $table->string('nome');
            $table->string('foto');
            $table->string('sexo')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('idioma')->nullable();
            $table->string('moeda_preferencial')->nullable();
            $table->text('auto_descricao')->nullable();
            $table->string('cpf')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('localizacao_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}
}

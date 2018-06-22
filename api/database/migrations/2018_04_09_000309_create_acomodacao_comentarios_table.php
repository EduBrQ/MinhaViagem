<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAcomodacaoComentariosTable.
 */
class CreateAcomodacaoComentariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acomodacao_comentarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('acomodacao_id');

            $table->text('texto');
            $table->integer('avaliacao');


            $table->timestamps();
            $table->softDeletes();

            $table->index('cliente_id');
            $table->index('acomodacao_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acomodacao_comentarios');
	}
}

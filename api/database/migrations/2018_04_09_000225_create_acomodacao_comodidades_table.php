<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAcomodacaoComodidadesTable.
 */
class CreateAcomodacaoComodidadesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acomodacao_comodidades', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('acomodacao_id');

            $table->string('descricao');
            $table->string('icone');

            $table->timestamps();
            $table->softDeletes();

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
		Schema::drop('acomodacao_comodidades');
	}
}

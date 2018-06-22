<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAcomodacaoFotosTable.
 */
class CreateAcomodacaoFotosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acomodacao_fotos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('link');
            $table->integer('acomodacao_id');

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
		Schema::drop('acomodacao_fotos');
	}
}

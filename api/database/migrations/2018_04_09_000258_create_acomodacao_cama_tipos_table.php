<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAcomodacaoCamaTiposTable.
 */
class CreateAcomodacaoCamaTiposTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acomodacao_cama_tipos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('acomodacao_id');

            $table->text('texto');

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
		Schema::drop('acomodacao_cama_tipos');
	}
}

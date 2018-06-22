<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLocalizacaosTable.
 */
class CreateLocalizacaosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacaos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');

            $table->timestamps();
            $table->softDeletes();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('localizacaos');
	}
}

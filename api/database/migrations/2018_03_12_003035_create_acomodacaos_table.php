<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAcomodacaosTable.
 */
class CreateAcomodacaosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acomodacaos', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('endereco_id');
            $table->integer('anfitriao_id');
            $table->string('nome');
            $table->integer('qtd_quartos')->nullable();
            $table->integer('qtd_banheiros')->nullable();
            $table->integer('qtd_camas')->nullable();
            $table->text('descricao')->nullable();
            $table->decimal('valor');
            $table->text('cancelamento')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index('endereco_id');
            $table->index('anfitriao_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acomodacaos');
	}
}

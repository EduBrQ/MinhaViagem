<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->nullable();
            $table->integer('anfitriao_id')->nullable();
            $table->string('name', 150);
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();

            $table->index('cliente_id');
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
        Schema::dropIfExists('users');
    }
}

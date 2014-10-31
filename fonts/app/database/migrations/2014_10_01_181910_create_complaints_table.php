<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


		Schema::create('usuarios012', function($tabla) {
			// id auto incremental (Clave Primaria)
			 $tabla->increments('id');

			 // varchar 32
			 $tabla->string('usuario', 32);
			 $tabla->string('email', 320);
			 $tabla->string('password', 64);

			 // int
			 $tabla->integer('rol');

			// created_at | updated_at DATETIME
			 $tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::drop('usuarios012');
	}

}

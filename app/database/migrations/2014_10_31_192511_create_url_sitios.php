<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlSitios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
           Schema::create('url_sitios', function($table) {
           // auto increment id (primary key)
               $table->bigIncrements('id');
               $table->integer('id_url');
               $table->integer('user_id');
               $table->string('url');
               $table->integer('type_url');
               $table->date('startDate');
               $table->string('type_info');
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
		 Schema::drop('url_sitios');
	}

}


<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlincludeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            //
            Schema::create('urlinclude', function($table) {
            // auto increment id (primary key)
                $table->bigIncrements('id_include');
                $table->integer('id_url');
                $table->string('urlInclude');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::drop('urlinclude');
	}

}

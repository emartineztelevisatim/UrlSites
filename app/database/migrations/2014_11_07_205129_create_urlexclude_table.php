<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlexcludeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            //
            Schema::create('urlexclude', function($table) {
            // auto increment id (primary key)
                $table->bigIncrements('id_exclude');
                $table->integer('id_url');
                $table->string('urlExclude');
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
            Schema::drop('urlexclude');
	}

}

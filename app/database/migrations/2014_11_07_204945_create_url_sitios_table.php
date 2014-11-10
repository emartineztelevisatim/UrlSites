<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlSitiosTable extends Migration {

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
                $table->bigIncrements('id_url');
                $table->string('nameUrl');
                $table->string('content_type');
                $table->string('period');
                $table->integer('numElements');
                $table->string('created_by');
                $table->string('modified_by');
                // created_at, updated_at DATETIME
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
		//
            Schema::drop('url_sitios');
	}

}

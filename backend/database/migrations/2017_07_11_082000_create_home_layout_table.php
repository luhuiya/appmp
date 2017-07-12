<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeLayoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_layout', function(Blueprint $table)
		{
			$table->integer('id')->primary('home_layout_pkey');
			$table->string('layout_name');
			$table->integer('layout_type');
			$table->integer('position');
			$table->string('category')->nullable();
			$table->string('subcategory')->nullable();
			$table->dateTime('created');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('home_layout');
	}

}

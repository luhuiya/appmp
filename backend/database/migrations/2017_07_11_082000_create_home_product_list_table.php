<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeProductListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_product_list', function(Blueprint $table)
		{
			$table->integer('id')->primary('home_product_list_pkey');
			$table->integer('product_id')->index('idx_c1f02ba94584665a');
			$table->integer('layout_id')->index('idx_c1f02ba98c22aa1a');
			$table->integer('position');
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
		Schema::drop('home_product_list');
	}

}

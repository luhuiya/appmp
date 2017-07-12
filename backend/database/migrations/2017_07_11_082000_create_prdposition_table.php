<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrdpositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prdposition', function(Blueprint $table)
		{
			$table->integer('id')->primary('prdposition_pkey');
			$table->integer('product_id')->index('idx_45985d8e4584665a');
			$table->integer('position');
			$table->string('category')->nullable();
			$table->string('subcategory')->nullable();
			$table->integer('position_top')->nullable();
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
		Schema::drop('prdposition');
	}

}

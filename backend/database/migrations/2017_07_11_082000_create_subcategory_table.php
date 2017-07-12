<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcategory', function(Blueprint $table)
		{
			$table->integer('id')->primary('subcategory_pkey');
			$table->string('name', 100)->nullable();
			$table->string('target')->nullable();
			$table->integer('priority')->nullable();
			$table->boolean('is_active')->nullable();
			$table->dateTime('created');
			$table->integer('category_id')->nullable()->index('idx_ddca44812469de2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subcategory');
	}

}

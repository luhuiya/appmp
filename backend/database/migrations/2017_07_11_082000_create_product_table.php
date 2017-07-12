<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('id')->primary('product_pkey');
			$table->string('product_name', 100)->nullable();
			$table->decimal('package_code', 10, 0)->nullable();
			$table->decimal('price', 10)->nullable();
			$table->text('description')->nullable();
			$table->string('compatibility', 100)->nullable();
			$table->string('urldownload', 2000)->nullable();
			$table->string('status', 100)->nullable();
			$table->dateTime('created');
			$table->integer('category_id')->nullable()->index('idx_d34a04ad12469de2');
			$table->integer('sub_category_id')->nullable()->index('idx_d34a04adf7bfe87c');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}

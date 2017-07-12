<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHomeProductListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('home_product_list', function(Blueprint $table)
		{
			$table->foreign('product_id', 'fk_c1f02ba94584665a')->references('id')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('layout_id', 'fk_c1f02ba98c22aa1a')->references('id')->on('home_layout')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('home_product_list', function(Blueprint $table)
		{
			$table->dropForeign('fk_c1f02ba94584665a');
			$table->dropForeign('fk_c1f02ba98c22aa1a');
		});
	}

}

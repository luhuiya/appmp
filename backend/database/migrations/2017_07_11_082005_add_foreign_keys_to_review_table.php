<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('review', function(Blueprint $table)
		{	
			$table->foreign('user_id', 'fk_review_user')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('product_id', 'fk_review_product')->references('id')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('review', function(Blueprint $table)
		{
			$table->dropForeign('fk_review_user');
			$table->dropForeign('fk_review_product');
		});
	}

}

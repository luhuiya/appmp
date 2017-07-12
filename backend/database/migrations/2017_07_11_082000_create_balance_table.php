<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balance', function(Blueprint $table)
		{
			$table->integer('id')->primary('balance_pkey');
			$table->integer('user_id')->nullable();
			$table->decimal('balance', 10)->nullable();
			$table->decimal('last_balance', 10)->nullable();
			$table->dateTime('last_usage');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('balance');
	}

}

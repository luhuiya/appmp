<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_token', function(Blueprint $table)
		{
			$table->string('hash')->primary('payment_token_pkey');
			$table->text('details')->nullable();
			$table->text('after_url')->nullable();
			$table->text('target_url');
			$table->string('gateway_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment_token');
	}

}

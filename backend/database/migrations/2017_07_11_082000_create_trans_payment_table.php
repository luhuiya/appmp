<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransPaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trans_payment', function(Blueprint $table)
		{
			$table->integer('id')->primary('trans_payment_pkey');
			$table->string('trans_id');
			$table->integer('detail_id')->nullable();
			$table->string('payment_method', 100)->nullable();
			$table->dateTime('created');
			$table->text('urldownload')->nullable();
			$table->integer('times_download')->nullable();
			$table->integer('max')->nullable();
			$table->string('token')->nullable();
			$table->integer('user_id')->nullable();
			$table->decimal('price', 10)->nullable();
			$table->integer('status')->nullable();
			$table->text('url_callback')->nullable();
			$table->string('payment_target', 100)->nullable();
			$table->string('voucher_code', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trans_payment');
	}

}

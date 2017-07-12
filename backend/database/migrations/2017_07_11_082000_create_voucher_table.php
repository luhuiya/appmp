<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoucherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voucher', function(Blueprint $table)
		{
			$table->integer('id')->primary('voucher_pkey');
			$table->string('code')->nullable();
			$table->string('name')->nullable();
			$table->dateTime('startdate');
			$table->dateTime('enddate');
			$table->integer('maxclaim')->nullable();
			$table->integer('target_type')->nullable();
			$table->boolean('is_active')->nullable();
			$table->integer('disc')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('voucher');
	}

}

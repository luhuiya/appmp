<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopUpVoucherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('top_up_voucher', function(Blueprint $table)
		{
			$table->integer('id')->primary('top_up_voucher_pkey');
			$table->string('code')->nullable();
			$table->decimal('price', 10)->nullable();
			$table->string('name')->nullable();
			$table->boolean('is_active')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('top_up_voucher');
	}

}

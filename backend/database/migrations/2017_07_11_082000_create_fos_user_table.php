<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fos_user', function(Blueprint $table)
		{
			$table->integer('id')->primary('fos_user_pkey');
			$table->string('username', 180);
			$table->string('username_canonical', 155);
			$table->string('email', 180);
			$table->string('email_canonical', 155);
			$table->boolean('enabled');
			$table->string('salt');
			$table->string('password');
			$table->dateTime('last_login')->nullable();
			$table->boolean('locked');
			$table->boolean('expired');
			$table->dateTime('expires_at')->nullable();
			$table->string('confirmation_token', 180)->nullable()->unique('uniq_957a6479c05fb297');
			$table->dateTime('password_requested_at')->nullable();
			$table->text('roles')->nullable();
			$table->boolean('credentials_expired');
			$table->dateTime('credentials_expire_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fos_user');
	}

}

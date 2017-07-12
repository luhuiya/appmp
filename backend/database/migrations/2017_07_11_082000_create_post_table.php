<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->integer('id')->primary('post_pkey');
			$table->integer('created_by_id')->nullable()->index('idx_5a8a6c8db03a8386');
			$table->string('title');
			$table->text('content');
			$table->boolean('visible');
			$table->integer('rating');
			$table->dateTime('published_at');
			$table->dateTime('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post');
	}

}

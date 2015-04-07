<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments',function($table){
			$table->increments('id');
			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users');
			$table->integer('posts_id')->unsigned();
			$table->foreign('posts_id')->references('id')->on('posts');
			$table->string('content',150);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}

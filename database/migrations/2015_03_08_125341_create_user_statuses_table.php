<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_statuses',function($table){
			$table->increments('id');
			$table->string('name',25);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('user_statuses')->insert(array(
				'name'=>'Regular'
			));
		DB::table('user_statuses')->insert(array(
				'name'=>'Verified'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_statuses');
	}

}

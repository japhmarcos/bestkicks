<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_types',function($table){
			$table->increments('id');
			$table->string('name',25);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('user_types')->insert(array(
				'name'=>'Administrator'
			));
		DB::table('user_types')->insert(array(
				'name'=>'Buyer'
			));
		DB::table('user_types')->insert(array(
				'name'=>'Seller'
			));
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_types');
	}

}

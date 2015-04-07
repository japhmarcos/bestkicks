<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conditions',function($table){
			$table->increments('id');
			$table->decimal('name');
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('conditions')->insert(array(
				'name'=>5.0
			));
		DB::table('conditions')->insert(array(
				'name'=>6.0
			));
		DB::table('conditions')->insert(array(
				'name'=>7.0
			));
		DB::table('conditions')->insert(array(
				'name'=>8.0
			));
		DB::table('conditions')->insert(array(
				'name'=>9.0
			));
		DB::table('conditions')->insert(array(
				'name'=>10.0
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conditions');
	}

}

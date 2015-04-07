<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoeTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoe_types',function($table){
			$table->increments('id');
			$table->string('name',20);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('shoe_types')->insert(array(
				'name'=>'Basketball'
			));
		DB::table('shoe_types')->insert(array(
				'name'=>'Running'
			));
		DB::table('shoe_types')->insert(array(
				'name'=>'Casual'
			));
		DB::table('shoe_types')->insert(array(
				'name'=>'Formal'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shoe_types');
	}

}

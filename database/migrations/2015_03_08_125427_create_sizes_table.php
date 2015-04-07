<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sizes',function($table){
			$table->increments('id');
			$table->decimal('name');
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('sizes')->insert(array(
				'name'=>7.0
			));
		DB::table('sizes')->insert(array(
				'name'=>7.5
			));
		DB::table('sizes')->insert(array(
				'name'=>8.0
			));
		DB::table('sizes')->insert(array(
				'name'=>8.5
			));
		DB::table('sizes')->insert(array(
				'name'=>9.0
			));
		DB::table('sizes')->insert(array(
				'name'=>9.5
			));
		DB::table('sizes')->insert(array(
				'name'=>10.0
			));
		DB::table('sizes')->insert(array(
				'name'=>10.5
			));
		DB::table('sizes')->insert(array(
				'name'=>11.0
			));
		DB::table('sizes')->insert(array(
				'name'=>11.5
			));
		DB::table('sizes')->insert(array(
				'name'=>12.0
			));
		DB::table('sizes')->insert(array(
				'name'=>12.5
			));
		DB::table('sizes')->insert(array(
				'name'=>13.0
			));
		DB::table('sizes')->insert(array(
				'name'=>13.5
			));
		DB::table('sizes')->insert(array(
				'name'=>14.0
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sizes');
	}

}
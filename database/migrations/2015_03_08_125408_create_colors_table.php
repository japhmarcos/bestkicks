<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colors',function($table){
			$table->increments('id');
			$table->string('name',20);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('colors')->insert(array(
				'name'=>'Pink'
			));
		DB::table('colors')->insert(array(
				'name'=>'Red'
			));
		DB::table('colors')->insert(array(
				'name'=>'Orange'
			));
		DB::table('colors')->insert(array(
				'name'=>'Yellow'
			));
		DB::table('colors')->insert(array(
				'name'=>'Green'
			));
		DB::table('colors')->insert(array(
				'name'=>'Blue'
			));
		DB::table('colors')->insert(array(
				'name'=>'Violet'
			));
		DB::table('colors')->insert(array(
				'name'=>'Black'
			));
		DB::table('colors')->insert(array(
				'name'=>'Grey'
			));
		DB::table('colors')->insert(array(
				'name'=>'White'
			));
		DB::table('colors')->insert(array(
				'name'=>'Cream'
			));
		DB::table('colors')->insert(array(
				'name'=>'Brown'
			));
		DB::table('colors')->insert(array(
				'name'=>'Multicolor'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('colors');
	}

}

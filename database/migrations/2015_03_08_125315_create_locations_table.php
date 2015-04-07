<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations',function($table){
			$table->increments('id');
			$table->string('name',45);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('locations')->insert(array(
				'name'=>'Caloocan'
			));
		DB::table('locations')->insert(array(
				'name'=>'Las Piñas'
			));
		DB::table('locations')->insert(array(
				'name'=>'Makati'
			));
		DB::table('locations')->insert(array(
				'name'=>'Malabon'
			));
		DB::table('locations')->insert(array(
				'name'=>'Mandaluyong'
			));
		DB::table('locations')->insert(array(
				'name'=>'Manila'
			));
		DB::table('locations')->insert(array(
				'name'=>'Marikina'
			));
		DB::table('locations')->insert(array(
				'name'=>'Muntinlupa'
			));
		DB::table('locations')->insert(array(
				'name'=>'Parañaque'
			));
		DB::table('locations')->insert(array(
				'name'=>'Pasay'
			));
		DB::table('locations')->insert(array(
				'name'=>'Pasig'
			));
		DB::table('locations')->insert(array(
				'name'=>'Pateros'
			));
		DB::table('locations')->insert(array(
				'name'=>'Quezon City'
			));
		DB::table('locations')->insert(array(
				'name'=>'San Juan'
			));
		DB::table('locations')->insert(array(
				'name'=>'Taguig'
			));
		DB::table('locations')->insert(array(
				'name'=>'Valenzuela'
			));
	}

	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}


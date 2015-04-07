<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statuses',function($table){
			$table->increments('id');
			$table->string('name',25);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('statuses')->insert(array(
				'name'=>'Up'
			));
		DB::table('statuses')->insert(array(
				'name'=>'Sold'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('statuses');
	}

}

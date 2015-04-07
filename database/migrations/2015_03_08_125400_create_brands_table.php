<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands',function($table){
			$table->increments('id');
			$table->string('name',25);
			$table->timestamps();
		});

		/*Population of database*/
		DB::table('brands')->insert(array(
				'name'=>'Adidas'
			));
		DB::table('brands')->insert(array(
				'name'=>'And1'
			));
		DB::table('brands')->insert(array(
				'name'=>'Asics'
			));
		DB::table('brands')->insert(array(
				'name'=>'Converse'
			));
		DB::table('brands')->insert(array(
				'name'=>'Jordan'
			));
		DB::table('brands')->insert(array(
				'name'=>'Levis'
			));
		DB::table('brands')->insert(array(
				'name'=>'New Balance'
			));
		DB::table('brands')->insert(array(
				'name'=>'New Era'
			));
		DB::table('brands')->insert(array(
				'name'=>'Nike'
			));
		DB::table('brands')->insert(array(
				'name'=>'Onitsuka Tiger'
			));
		DB::table('brands')->insert(array(
				'name'=>'Peak'
			));
		DB::table('brands')->insert(array(
				'name'=>'Puma'
			));
		DB::table('brands')->insert(array(
				'name'=>'Reebok'
			));
		DB::table('brands')->insert(array(
				'name'=>'Skechers'
			));
		DB::table('brands')->insert(array(
				'name'=>'Sperry'
			));
		DB::table('brands')->insert(array(
				'name'=>'Under Armour'
			));
		DB::table('brands')->insert(array(
				'name'=>'Vans'
			));
		DB::table('brands')->insert(array(
				'name'=>'World Balance'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('brands');
	}

}

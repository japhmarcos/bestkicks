<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function($table){
			$table->increments('id');
			$table->integer('colors_id')->unsigned();
			$table->foreign('colors_id')->references('id')->on('colors');
			$table->integer('sizes_id')->unsigned();
			$table->foreign('sizes_id')->references('id')->on('sizes');
			$table->integer('brands_id')->unsigned();
			$table->foreign('brands_id')->references('id')->on('brands');
			$table->integer('conditions_id')->unsigned();
			$table->foreign('conditions_id')->references('id')->on('conditions');
			$table->integer('locations_id')->unsigned();
			$table->foreign('locations_id')->references('id')->on('locations');
			$table->integer('shoe_types_id')->unsigned();
			$table->foreign('shoe_types_id')->references('id')->on('shoe_types');
			$table->integer('users_id')->unsigned();
			$table->foreign('users_id')->references('id')->on('users');
			$table->integer('statuses_id')->unsigned();
			$table->foreign('statuses_id')->references('id')->on('statuses');
			$table->string('title',30);
			$table->string('description',45);
			$table->string('frontview',45);
			$table->string('backview',45);
			$table->string('soleview',45);
			$table->string('rightview',45);
			$table->string('leftview',45);
			$table->string('topview',45);
			$table->decimal('price');
			$table->timestamps();
		});

		DB::table('posts')->insert(array(
				'title'=> 'LeBron XII Easter',
				'users_id' => '7',
				'statuses_id' => '1',
				'description' => 'New release, collectors item, King James',
				'price' => 8999.00,
				'colors_id' => '13',
				'sizes_id' => '7',
				'brands_id' => '9',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'KD 7 Easter',
				'users_id' => '7',
				'statuses_id' => '1',
				'description' => 'New release, collectors item',
				'price' => 6599.00,
				'colors_id' => '5',
				'sizes_id' => '7',
				'brands_id' => '9',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Kyrie 1 Easter',
				'users_id' => '7',
				'statuses_id' => '1',
				'description' => 'New release, collectors item, uncle drew',
				'price' => 4799.00,
				'colors_id' => '7',
				'sizes_id' => '7',
				'brands_id' => '9',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Kobe X Easter',
				'users_id' => '7',
				'statuses_id' => '1',
				'description' => 'New release, collectors item, Mamba',
				'price' => 7999.00,
				'colors_id' => '13',
				'sizes_id' => '7',
				'brands_id' => '9',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Curry One Candy Reign',
				'users_id' => '6',
				'statuses_id' => '1',
				'description' => 'Apple Green, UA, Splash',
				'price' => 5499.00,
				'colors_id' => '5',
				'sizes_id' => '7',
				'brands_id' => '16',
				'conditions_id' => '5',
				'locations_id' => '3',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'DRose 5 Boost Alternate',
				'users_id' => '4',
				'statuses_id' => '1',
				'description' => 'one for rose',
				'price' => 6299.00,
				'colors_id' => '9',
				'sizes_id' => '13',
				'brands_id' => '1',
				'conditions_id' => '6',
				'locations_id' => '9',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Spawn 2 Grey Camo',
				'users_id' => '4',
				'statuses_id' => '1',
				'description' => 'good as new',
				'price' => 5000.00,
				'colors_id' => '9',
				'sizes_id' => '13',
				'brands_id' => '16',
				'conditions_id' => '5',
				'locations_id' => '9',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'KD 6 Maryland Blue Crab',
				'users_id' => '3',
				'statuses_id' => '1',
				'description' => 'Will buy new shoes, trade for kyrie 1',
				'price' => 5000.00,
				'colors_id' => '6',
				'sizes_id' => '11',
				'brands_id' => '9',
				'conditions_id' => '5',
				'locations_id' => '9',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Air Jordan Dub Zero Teal',
				'users_id' => '8',
				'statuses_id' => '1',
				'description' => 'Dub Zero',
				'price' => 7995.00,
				'colors_id' => '13',
				'sizes_id' => '9',
				'brands_id' => '5',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

		DB::table('posts')->insert(array(
				'title'=> 'Air Jordan 4 Retro Laser',
				'users_id' => '8',
				'statuses_id' => '1',
				'description' => 'Jordan 4',
				'price' => 14495.00,
				'colors_id' => '10',
				'sizes_id' => '9',
				'brands_id' => '5',
				'conditions_id' => '6',
				'locations_id' => '15',
				'shoe_types_id' => '1',
				'frontview' => 'front.jpg',
				'backview' => 'back.jpg',
				'soleview' =>'sole.jpg',
				'rightview' => 'right.jpg',
				'leftview' => 'left.jpg',
				'topview' => 'top.jpg'
			));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->integer('locations_id')->unsigned();
			$table->foreign('locations_id')->references('id')->on('locations');
			$table->integer('user_types_id')->unsigned();
			$table->foreign('user_types_id')->references('id')->on('user_types');
			$table->integer('user_statuses_id')->unsigned();
			$table->foreign('user_statuses_id')->references('id')->on('user_statuses');
			$table->string('username',30);
			$table->string('email',45)->unique();
			$table->string('password',60);
			$table->rememberToken();
			$table->string('firstname',30);
			$table->string('lastname',30);
			$table->string('middlename',30);
			$table->date('dateofbirth');
			$table->string('gender',1);
			$table->string('mobilenumber',11);
			$table->string('landline',18);
			$table->string('display_photo',45);
			$table->string('valid_id',45);
			$table->timestamps();
		});

		DB::table('users')->insert(array(
				'locations_id'=> '1',
				'user_types_id' => '1',
				'user_statuses_id' => '2',
				'username' => 'admin',
				'email' => 'admin@email.com',
				'password' => bcrypt('administrator'),
				'firstname' => 'admin',
				'middlename' => 'admin',
				'lastname' => 'admin',
				'dateofbirth' => '9999-12-31',
				'gender' => 'M',
				'mobilenumber' => '09333817983'
			));
		DB::table('users')->insert(array(
				'locations_id'=> '15',
				'user_types_id' => '2',
				'user_statuses_id' => '2',
				'username' => 'asperez',
				'email' => 'asperez@email.com',
				'password' => bcrypt('bestkicks'),
				'firstname' => 'Allan Dave',
				'middlename' => 'Santos',
				'lastname' => 'Perez',
				'dateofbirth' => '1994-09-28',
				'gender' => 'M',
				'mobilenumber' => '09752464113',
				'display_photo' => 'witness.jpg',
				'valid_id' => 'default_validid.png'
			));
		DB::table('users')->insert(array(
				'locations_id'=> '9',
				'user_types_id' => '3',
				'user_statuses_id' => '2',
				'username' => 'ealim',
				'email' => 'ealim@email.com',
				'password' => bcrypt('bestkicks'),
				'firstname' => 'Kenneth Bryan',
				'middlename' => 'Abellera',
				'lastname' => 'Lim',
				'dateofbirth' => '1995-02-14',
				'gender' => 'M',
				'mobilenumber' => '09069502516',
				'display_photo' => 'pag.jpg',
				'valid_id' => 'default_validid.png'
			));
		DB::table('users')->insert(array(
				'locations_id'=> '9',
				'user_types_id' => '3',
				'user_statuses_id' => '2',
				'username' => 'jfcanseco',
				'email' => 'jfcanseco@email.com',
				'password' => bcrypt('bestkicks'),
				'firstname' => 'Jose Francisco',
				'middlename' => 'Cantuba',
				'lastname' => 'Canseco',
				'dateofbirth' => '1996-05-28',
				'gender' => 'M',
				'mobilenumber' => '09272754338',
				'display_photo' => '1.jpg',
				'valid_id' => 'default_validid.png'
			));

		DB::table('users')->insert(array(
				'locations_id'=> '1',
				'user_types_id' => '2',
				'user_statuses_id' => '2',
				'username' => 'buyer',
				'email' => 'buyer@email.com',
				'password' => bcrypt('bestkicks'),
				'firstname' => 'Buyer',
				'middlename' => 'Buyer',
				'lastname' => 'Buyer',
				'dateofbirth' => '2015-01-01',
				'gender' => 'M',
				'mobilenumber' => '09998887777',
				'display_photo' => 'default_user.jpg',
				'valid_id' => 'default_validid.png'
			));

		DB::table('users')->insert(array(
				'locations_id'=> '1',
				'user_types_id' => '3',
				'user_statuses_id' => '2',
				'username' => 'seller',
				'email' => 'seller@email.com',
				'password' => bcrypt('bestkicks'),
				'firstname' => 'Seller',
				'middlename' => 'Seller',
				'lastname' => 'Seller',
				'dateofbirth' => '2015-01-01',
				'gender' => 'M',
				'mobilenumber' => '09981234567',
				'display_photo' => 'default_user.jpg',
				'valid_id' => 'default_validid.png'
			));

		DB::table('users')->insert(array(
				'locations_id'=> '15',
				'user_types_id' => '3',
				'user_statuses_id' => '2',
				'username' => 'nikeph',
				'email' => 'nikeph@email.com',
				'password' => bcrypt('nikeph'),
				'firstname' => 'Nike',
				'middlename' => 'Nike',
				'lastname' => 'Philippines',
				'dateofbirth' => '2015-01-01',
				'gender' => 'M',
				'mobilenumber' => '09154566453',
				'landline' => '1-800-1888-6453',
				'display_photo' => 'nikeplus.jpg',
				'valid_id' => 'kyriestar.jpg'
			));

		DB::table('users')->insert(array(
				'locations_id'=> '15',
				'user_types_id' => '3',
				'user_statuses_id' => '2',
				'username' => 'titan22',
				'email' => 'sales@titan22.com',
				'password' => bcrypt('titan22'),
				'firstname' => 'Titan',
				'middlename' => 'Titan',
				'lastname' => 'Philippines',
				'dateofbirth' => '2010-07-01',
				'gender' => 'M',
				'landline' => '725-03-68',
				'mobilenumber' => '09171584826',
				'display_photo' => 'titanlogo.jpg',
				'valid_id' => 'default_validid.png'
			));


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
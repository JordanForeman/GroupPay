<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_group', function($table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');

			// * => *
			$table->integer('group_id');
			$table->integer('user_id');
			$table->timestamps();

			//$table->foreign('user_id')->references('id')->on('users')->unsigned();
			//$table->foreign('group_id')->references('id')->on('groups')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_group');
	}

}
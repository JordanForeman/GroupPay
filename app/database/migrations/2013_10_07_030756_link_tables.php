<?php

use Illuminate\Database\Migrations\Migration;

class LinkTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_group', function($table)
		{
			$table->foreign('group_id')->references('id')->on('groups');
			$table->foreign('user_id')->references('id')->on('users');
		});

		Schema::table('transactions', function($table)
		{
			$table->foreign('group_id')->references('id')->on('groups');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
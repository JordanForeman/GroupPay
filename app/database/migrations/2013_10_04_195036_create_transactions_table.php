<?php

use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function($table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			
			$table->integer('group_id')->unsigned();
			
			$table->integer('user_id')->unsigned();
			
			$table->text('description');
			//TODO: currently we only support up to 9999.99 in transactions
			$table->decimal('amount', 6, 2);
			$table->timestamps();

			//$table->foreign('group_id')->references('id')->on('groups')->unsigned();
			//$table->foreign('user_id')->references('id')->on('users')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
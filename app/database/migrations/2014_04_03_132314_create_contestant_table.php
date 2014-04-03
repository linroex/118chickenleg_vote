<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contestant', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->text('stuid');
			$table->text('profile');
			$table->text('department');
			$table->text('audio_file');
			$table->integer('vote_num');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contestant');
	}

}

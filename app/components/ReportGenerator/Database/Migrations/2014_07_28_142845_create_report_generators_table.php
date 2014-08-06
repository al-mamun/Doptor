<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportGeneratorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_generators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('module_name');
			$table->string('module_alias');
			$table->string('model');
			$table->string('fields');
			$table->string('author');
			$table->string('version');
			$table->string('website');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('report_generators');
	}

}
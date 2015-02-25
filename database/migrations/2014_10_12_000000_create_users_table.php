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
        Schema::create('permissions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('login');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('first_name', 60);
			$table->string('second_name', 60);
			$table->integer('permission_id')->unsigned();
			$table->rememberToken();
			$table->timestamps();

            $table->foreign('permission_id')
                  ->references('id')
                  ->on('permissions');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
        Schema::drop('permissions');
	}

}

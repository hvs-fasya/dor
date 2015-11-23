<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('keyword')->required();
            $table->string('url')->required();
            $table->longText('data')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('links')->nullable();
            $table->integer('cat_id')->nullable();
            $table->enum('status', ['deleted', 'banned', 'disabled', 'published', 'suspended'])->default('disabled');
            $table->boolean('has_content')->default(false);
            $table->boolean('has_mail_otvet')->default(true);
			$table->timestamps();

            //$table->unique(['keyword', 'url']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contents');
	}

}

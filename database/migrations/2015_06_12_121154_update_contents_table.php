<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('contents', function ($table) {
            //$table->tinyInteger('is_category')->nullable()->after('has_content');
            $table->boolean('is_category')->default(false)->after('has_content');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('contents', function ($table) {
            $table->dropColumn('is_category');
        });
	}

}

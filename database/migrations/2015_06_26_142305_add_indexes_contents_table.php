<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexesContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('contents', function ($table) {
            $table->index('status');
            $table->index(['url', 'status']);
            $table->index('url');
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
            $table->dropIndex('contents_status_index');
            $table->dropIndex('contents_url_status_index');
            $table->dropIndex('contents_url_index');
        });
	}

}

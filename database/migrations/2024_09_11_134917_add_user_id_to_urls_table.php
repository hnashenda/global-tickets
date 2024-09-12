<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::table('urls', function (Blueprint $table) {
            // Add foreign key user_id
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Ensure that target_url and shortened_url are unique
            $table->unique('target_url');
            $table->unique('shortened_url');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      /*  Schema::table('urls', function (Blueprint $table) {
            // Drop unique constraints
            $table->dropUnique(['target_url']);
            $table->dropUnique(['shortened_url']);
            
            // Drop the foreign key first, then the column
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });*/
    }
}

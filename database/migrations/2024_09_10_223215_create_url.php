<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->id();
            $table->string('target_url', 191); 
            $table->string('shortened_url', 191); 
            // Foreign key to users table, cascading on delete
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();

            // Create a composite unique index on user_id, target_url, and shortened_url
            // Ensures that a user cannot have the same target_url or shortened_url multiple times
            $table->unique(['user_id', 'target_url']);
            $table->unique(['user_id', 'shortened_url']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urls');
    }
}

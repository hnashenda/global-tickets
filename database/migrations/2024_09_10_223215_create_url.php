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
            $table->string('target_url', 191)->unique(); // Ensuring target_url is unique with max length of 191
            $table->string('shortened_url', 191)->unique(); // Ensuring shortened_url is unique with max length of 191
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table, cascading on delete
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
        Schema::dropIfExists('urls');
    }
}

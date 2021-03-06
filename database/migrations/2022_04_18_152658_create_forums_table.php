<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('category');
            $table->text('body');
            $table->boolean('isPublished');
            $table->string('verification_status')->nullable()->default('Not Verified');
            $table->string('slug');
            $table->integer('like');
            $table->integer('dislike');
            $table->integer('report');
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
        Schema::dropIfExists('forums');
    }
}

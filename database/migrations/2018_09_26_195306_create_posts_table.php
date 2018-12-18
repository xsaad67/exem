<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('slug')->unique();
            $table->integer('type')->default(1)->comment('1 for post, 2 for image, 3 for meme');
            $table->integer('visitors')->default(1);
            $table->string('featured')->nullable();
            $table->string('tags')->nullable();
            $table->string('link')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('isApproved')->default(1);
            $table->string('source')->nullable();
            $table->string('website')->nullable();
            $table->integer('fakeUpVotes')->nullable();
            $table->integer('fakeDownVotes')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}

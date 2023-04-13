<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('district_id');
            $table->integer('subdistrict_id')->nullable();
            $table->integer('user_id');
            $table->string('title');
            $table->string('img');
            $table->text('detail');
            $table->text('slug')->nullable();
            $table->integer('headline')->nullable();
            $table->integer('main')->nullable();
            $table->integer('status')->default(1);

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

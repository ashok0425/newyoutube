<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('meta_author')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('google_analytics')->nullable();
            $table->string('google_verification')->nullable();
            $table->text('alexa_analytics')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('logo')->nullable();
            $table->string('fev')->nullable();

            $table->text('aboutus')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->text('term')->nullable();
            $table->string('copy')->nullable();
            $table->string('developer')->nullable();

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
        Schema::dropIfExists('seos');
    }
}

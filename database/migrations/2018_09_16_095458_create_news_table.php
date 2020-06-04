<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->text('image')->nullable();
            $table->smallInteger('sort')->nullable();
            $table->timestamps();

            //TODO many to many relations to gallery image and videos.
        });

        Schema::create('news_translations', function(Blueprint $table){
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->string('title')->nullable();
            $table->text('description')->nullable();

            $table->string('locale')->index();

            $table->unique(['news_id','locale']);
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
        Schema::dropIfExists('news_translations');
    }
}

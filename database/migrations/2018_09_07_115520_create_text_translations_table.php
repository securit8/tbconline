<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('text_id')->unsigned();
            $table->string('locale')->index();
        
            $table->string('name');
            $table->text('description');
        
            $table->unique(['text_id','locale']);
            $table->foreign('text_id')->references('id')->on('texts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text_translations');
    }
}

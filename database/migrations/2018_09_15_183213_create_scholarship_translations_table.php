<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scholarship_id')->unsigned();
            $table->string('locale')->index();

            $table->longText('description');

            $table->unique(['locale','scholarship_id']);
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onDelete('cascade');

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
        Schema::dropIfExists('scholarship_translations');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContributorTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributor_translations',function(Blueprint $table){
            $table->increments('id');
            $table->integer('contributor_id')->unsigned();

            $table->string('name');
            $table->text('description');

            $table->string('locale')->index();
            $table->unique(['locale','contributor_id']);
            $table->foreign('contributor_id')->references('id')->on('contributors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

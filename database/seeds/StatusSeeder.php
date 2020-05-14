<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_status')->insert(
        [
            'news_id' => null
        ]);

        DB::table('news_status')->insert(
        [
            'news_id' => null
        ]);

        DB::table('news_status')->insert(
        [
            'news_id' => null
        ]);
    }
}

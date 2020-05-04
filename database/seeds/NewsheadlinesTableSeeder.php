<?php

use Illuminate\Database\Seeder;

class NewsheadlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Newsheadlines::class, 100)->create();
    }
}

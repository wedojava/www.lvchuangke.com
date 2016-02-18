<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\About::truncate();
        factory(App\About::class, 20)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class SuccessfulCaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SuccessfulCase::truncate();
        factory(App\SuccessfulCase::class, 20)->create();
    }
}

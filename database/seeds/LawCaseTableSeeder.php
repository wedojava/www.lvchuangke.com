<?php

use Illuminate\Database\Seeder;

class LawCaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LawCase::truncate();
        factory(App\LawCase::class, 20)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class LawyerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lawyer::truncate();
        factory(App\Lawyer::class, 20)->create();
    }
}

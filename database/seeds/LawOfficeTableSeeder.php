<?php

use Illuminate\Database\Seeder;

class LawOfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LawOffice::truncate();
        factory(App\LawOffice::class, 20)->create();
    }
}

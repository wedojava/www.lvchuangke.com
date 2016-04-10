<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(LawCaseTableSeeder::class);
        $this->call(LawOfficeTableSeeder::class);
        $this->call(LawyerTableSeeder::class);
        $this->call(SuccessfulCaseTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        
		Model::reguard();
    }
}

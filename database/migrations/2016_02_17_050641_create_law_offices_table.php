<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('officeName')->unique();
            $table->string('telephone')->unique();
            $table->string('description_raw');
            $table->string('description_html');
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
        Schema::drop('law_offices');
    }
}

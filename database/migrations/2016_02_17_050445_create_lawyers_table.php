<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('professional_field');
            $table->string('certified_no');
            $table->string('certified_ages');
            $table->string('telephone');
            $table->string('email');
            $table->string('QQ');
            $table->text('description_raw');
            $table->text('description_html');
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
        Schema::drop('lawyers');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname')->unique();
            $table->string('telephone');
            $table->string('email');
            $table->string('QQ');
            $table->string('weixin');
            $table->string('weibo');
            $table->string('detail_raw');
            $table->string('detail_html');
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
        Schema::drop('law_cases');
    }
}

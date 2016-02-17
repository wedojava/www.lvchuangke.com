<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuccessfulCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('successful_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caseTitle');
            $table->string('caseDetail');
            $table->string('lawyer');
            $table->string('lawOffice');
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
        Schema::drop('successful_cases');
    }
}

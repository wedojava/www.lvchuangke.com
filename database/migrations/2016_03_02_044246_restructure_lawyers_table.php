<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestructureLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::table('lawyers', function (Blueprint $table) {
            // $table->string('professional_field')->after('username');
            // $table->string('occupation_no')->after('username');
            // $table->dropColumn('weixin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lawyers', function (Blueprint $table) {
            //
        });
    }
}

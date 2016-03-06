<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_avatars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lawyer_id')->unsigned();
            // $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->string('name');
            $table->string('path')->default('assets/image/avatar.svg');
            $table->string('thumbnail_path')->default('assets/image/avatar.svg');
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
        Schema::drop('lawyer_avatars');
    }
}

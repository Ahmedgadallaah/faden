<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficerSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officer_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('officer_id')->unsigned();
            $table->BigInteger('skill_id')->unsigned();
            $table->foreign('officer_id')->references('id')->on('officers')
            ->onDelete('cascade');
        $table->foreign('skill_id')->references('id')->on('skills')
            ->onDelete('cascade');
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
        Schema::dropIfExists('officer_skill');
    }
}

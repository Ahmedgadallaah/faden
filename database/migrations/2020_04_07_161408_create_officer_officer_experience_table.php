<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficerOfficerExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officer_officer_experience', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('officer_id')->unsigned();
            $table->BigInteger('officer_experience_id')->unsigned();
            $table->foreign('officer_id')->references('id')->on('officers')
                ->onDelete('cascade');
            $table->foreign('officer_experience_id')->references('id')->on('officer_experiences')
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
        Schema::dropIfExists('officer_officer_experience');
    }
}

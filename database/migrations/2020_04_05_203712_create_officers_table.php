<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('objective');
            $table->string('university');
            $table->string('city');
            $table->string('Gpa');
            $table->string('communication');
            $table->string('leader');
            $table->string('cv');
            $table->string('job_title');
            $table->string('position');
            $table->string('company_name');
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
        Schema::dropIfExists('officers');
    }
}

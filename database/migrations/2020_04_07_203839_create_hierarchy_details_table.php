<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hierarchy_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('department_id')->unsigned();
            $table->boolean('online');
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments')
             ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hierarchy_details');
    }
}

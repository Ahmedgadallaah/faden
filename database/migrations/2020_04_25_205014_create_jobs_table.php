<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author');
            $table->unsignedBigInteger('client_id');
            $table->BigInteger('location_id')->unsigned();
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('title_id');
            $table->boolean('online')->default(0);
            $table->timestamps();
            
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade');

             $table->foreign('location_id')->references('id')->on('locations')
             ->onDelete('cascade');

             $table->foreign('experience_id')->references('id')->on('experiences')
             ->onDelete('cascade');

             $table->foreign('title_id')->references('id')->on('titles')
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
        Schema::dropIfExists('jobs');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_translations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('location_id');
            $table->unique(['location_id', 'locale']);
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
                 
     
            $table->string('location');
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
        Schema::dropIfExists('location_translations');
    }
}

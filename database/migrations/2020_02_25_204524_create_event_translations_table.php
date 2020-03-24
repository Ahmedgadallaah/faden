<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_translations', function (Blueprint $table) {
            $table->Increments('id');
            
            
            $table->string('locale')->index();

       // Foreign key to the main model
            $table->unsignedInteger('event_id');
            $table->unique(['event_id', 'locale']);
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->string('name');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_translations');
    }
}

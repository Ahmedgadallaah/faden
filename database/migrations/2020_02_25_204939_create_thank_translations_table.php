<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThankTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thank_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            
            $table->string('locale')->index();

       // Foreign key to the main model
            $table->unsignedBigInteger('thank_id');
            $table->unique(['thank_id', 'locale']);
            $table->foreign('thank_id')->references('id')->on('thanks')->onDelete('cascade');
            
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
        Schema::dropIfExists('thank_translations');
    }
}

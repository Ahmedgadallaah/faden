<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();
       // Foreign key to the main model
            $table->unsignedBigInteger('client_id');
            $table->unique(['client_id', 'locale']);
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

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
        Schema::dropIfExists('client_translations');
    }
}

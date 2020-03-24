<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hierarchy_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            
            $table->string('locale')->index();

       // Foreign key to the main model
            $table->unsignedBigInteger('hierarchy_id');
            $table->unique(['hierarchy_id', 'locale']);
            $table->foreign('hierarchy_id')->references('id')->on('hierarchies')->onDelete('cascade');
            
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
        Schema::dropIfExists('hierarchy_translations');
    }
}

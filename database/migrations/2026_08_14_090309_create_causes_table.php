<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // For clean URLs like /causes/my-first-post
            $table->text('excerpt')->nullable(); // Short description for the main causes page
            $table->longText('body'); // The main causes content
            $table->string('image_path')->nullable(); // Path to the causes image
            $table->timestamps(); // Automatically adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('causes');
    }
}

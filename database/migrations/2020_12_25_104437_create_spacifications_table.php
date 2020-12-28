<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spacifications', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('file_type_id')->nullable();
            $table->string('background_id')->nullable();
            $table->string('alignment_id')->nullable();
            $table->string('color_id')->nullable();
            $table->string('margin')->nullable();
            $table->string('dpi_id')->nullable();
            $table->string('size_format_id')->nullable();
            $table->string('addon_id')->nullable();
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
        Schema::dropIfExists('spacifications');
    }
}

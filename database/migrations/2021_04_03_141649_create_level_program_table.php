<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_program', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id');
            $table->foreignId('program_id');
            $table->timestamps();

            $table->foreign('level_id')
            ->references('id')
            ->on('levels');

            $table->foreign('program_id')
            ->references('id')
            ->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_program');
    }
}

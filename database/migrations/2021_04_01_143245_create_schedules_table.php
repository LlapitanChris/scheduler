<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('day');
            $table->time('timeStarts');
            $table->time('timeEnds');
            $table->foreignId('level_id');
            $table->foreignId('program_id');
            $table->integer('slots')->default(20);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

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
        Schema::dropIfExists('schedules');
    }
}

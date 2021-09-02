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
        Schema::create('tbl_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('matchday');
            $table->string('date');
            $table->string('time');
            $table->string('map');
            $table->unsignedInteger('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tbl_tournaments');
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
        Schema::dropIfExists('schedules');
    }
}

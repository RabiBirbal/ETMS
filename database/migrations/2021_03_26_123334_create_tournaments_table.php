<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('banner');
            $table->longText('first_paragraph');
            $table->longText('second_paragraph');
            $table->string('start_date');
            $table->string('reg_end_date');
            $table->string('end_date');
            $table->string('pool_prize');
            $table->string('1st_prize');
            $table->string('2nd_prize');
            $table->string('3rd_prize');
            $table->string('highest_killer_prize');
            $table->string('status');
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
        Schema::dropIfExists('tournaments');
    }
}

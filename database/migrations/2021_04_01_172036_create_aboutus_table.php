<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_aboutus', function (Blueprint $table) {
            $table->id();
            $table->longText('first_paragraph');
            $table->longText('second_paragraph');
            $table->string('esewa_id');
            $table->string('address');
            $table->string('email');
            $table->string('secondary_email');
            $table->mediumText('logo');
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
        Schema::dropIfExists('aboutus');
    }
}

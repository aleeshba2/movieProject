<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shows', function (Blueprint $table) {
            $table->id();
            $table->integer('startTime');
            $table->integer('endTime');
            $table->integer('date');
            $table->integer('availableSeate');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('movie_users');
            $table->bigInteger('hallId')->unsigned();
            $table->foreign('hallId')->references('id')->on('tbl_halls');
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
        Schema::dropIfExists('tbl_shows');
    }
};

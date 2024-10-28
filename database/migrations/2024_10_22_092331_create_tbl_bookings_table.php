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
        Schema::create('tbl_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('movie_users');

            $table->bigInteger('showId')->unsigned();
            $table->foreign('showId')->references('id')->on('tbl_shows');
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
        Schema::dropIfExists('tbl_bookings');
    }
};

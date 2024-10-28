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
        Schema::create('tbl_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('ratings');
            $table->text('feedbackMessage');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('movie_users');

            $table->bigInteger('movieId')->unsigned();
            $table->foreign('movieId')->references('id')->on('tbl_movies');

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
        Schema::dropIfExists('tbl_reviews');
    }
};

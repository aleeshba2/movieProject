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
        Schema::create('tbl_movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('trailer');
            $table->text('dsecription');
            $table->string('rating');
            $table->string('writtenBy');
            $table->string('genre');
            $table->string('directedBy');
            $table->string('releaseDate');

            $table->bigInteger('catId')->unsigned();
            $table->foreign('catId')->references('id')->on('tbl_categories');

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
        Schema::dropIfExists('tbl_movies');
    }
};

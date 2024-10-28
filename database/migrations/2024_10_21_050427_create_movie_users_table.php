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
        Schema::create('movie_users', function (Blueprint $table) {
            $table->id();
            $table->string('name',125);
            $table->string('email',125);
            $table->string('password',255);
            $table->integer('age');
            $table->integer('mobile');
            $table->string('gender',255);
            $table->string('image');
            $table->string('role',20)->default('user');

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
        Schema::dropIfExists('movie_users');
    }
};

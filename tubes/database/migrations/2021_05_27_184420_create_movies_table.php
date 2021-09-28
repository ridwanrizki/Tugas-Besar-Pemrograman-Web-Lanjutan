<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('restrict');
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->string('image');
            $table->string('trailer');
            $table->string('status');
            $table->date('release_date');
            $table->string('country');
            $table->unsignedInteger('run_time');
            $table->string('mmpa_ratings');
            $table->float('rating', 2, 1);
            $table->timestamps();
            //ratingnya panggil tabel reviews
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}

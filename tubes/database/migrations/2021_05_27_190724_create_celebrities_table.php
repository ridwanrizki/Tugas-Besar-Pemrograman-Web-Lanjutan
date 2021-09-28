<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelebritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name');
            $table->text('excerpt');
            $table->text('biography');
            $table->date('birth_date');
            $table->date('death_date')->nullable();
            $table->enum('category', ['Actor', 'Actress', 'Director', 'Others']);
            $table->string('country');
            $table->unsignedInteger('height');
            $table->string('image');
            $table->string('link_facebook')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('link_instagram')->nullable();
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
        Schema::dropIfExists('celebrities');
    }
}

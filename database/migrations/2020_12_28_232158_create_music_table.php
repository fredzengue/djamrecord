<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->date('release_date');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('album_id');
            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders');
            $table->foreign('artist_id')
                  ->references('id')
                  ->on('artists');
            $table->foreign('album_id')
                  ->references('id')
                  ->on('albums');
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
        Schema::dropIfExists('music');
    }
}

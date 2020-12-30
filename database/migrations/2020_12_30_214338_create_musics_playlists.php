<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsPlaylists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_playlists', function (Blueprint $table) {
            $table->id();
            $table->string('premium');
            $table->unsignedBigInteger('music_id');
            $table->unsignedBigInteger('playlist_id');
            $table->foreign('music_id')
                  ->references('id')
                  ->on('music');
            $table->foreign('playlist_id')
                  ->references('id')
                  ->on('playlists');
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
        Schema::dropIfExists('music_playlists');
    }
}

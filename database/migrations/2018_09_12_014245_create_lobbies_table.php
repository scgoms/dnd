<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lobbies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable()->default(false);
            $table->unsignedInteger('creator_id');
            $table->timestamps();
        });

        Schema::create('lobby_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('lobby_id');
            $table->primary(['user_id', 'lobby_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lobbies');
        Schema::dropIfExists('lobby_user');
    }
}

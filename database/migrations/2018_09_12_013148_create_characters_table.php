<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('class');
            $table->unsignedInteger('level');
            $table->string('background');
            $table->string('race');
            $table->string('alignment');
            $table->string('experience_points');
            $table->boolean('inspiration');
            $table->integer('proficiency_bonus');
            $table->integer('armor_class');
            $table->integer('initiative');
            $table->integer('speed');
            $table->integer('max_hit_points');
            $table->integer('current_hit_points');
            $table->integer('temporary_hit_points');
            $table->integer('hit_dice');
            $table->text('personality_traits');
            $table->text('ideals');
            $table->text('bonds');
            $table->text('flaws');
            $table->text('proficiencies');
            $table->text('features_and_traits');
            $table->unsignedInteger('creator_id');
            $table->timestamps();
        });

        Schema::create('character_game', function (Blueprint $table) {
            $table->unsignedInteger('character_id');
            $table->unsignedInteger('game_id');
            $table->primary(['character_id', 'game_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
        Schema::dropIfExists('character_game');
    }
}

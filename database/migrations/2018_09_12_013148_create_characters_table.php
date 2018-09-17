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
            $table->string('race');
            $table->string('background');
            $table->string('alignment');
            $table->string('experience_points');
            $table->integer('armor_class');
            $table->integer('initiative');
            $table->integer('speed');
            $table->integer('maximum_hit_points');
            $table->integer('temporary_hit_points');
            $table->integer('current_hit_points');
            $table->integer('hit_dice');
            $table->integer('death_saving_throw_success');
            $table->integer('death_saving_throw_failure');
            $table->string('weapon_1_name');
            $table->string('weapon_1_attack_bonus');
            $table->string('weapon_1_damage_type');
            $table->string('weapon_2_name');
            $table->string('weapon_2_attack_bonus');
            $table->string('weapon_2_damage_type');
            $table->string('weapon_3_name');
            $table->string('weapon_3_attack_bonus');
            $table->string('weapon_3_damage_type');
            $table->text('attacks_and_spellcasting');
            $table->integer('electrum');
            $table->integer('platinum');
            $table->integer('gold');
            $table->integer('silver');
            $table->integer('bronze');
            $table->text('equipment');
            $table->integer('perception');
            $table->integer('inspiration');
            $table->integer('proficiency_bonus');
            $table->text('proficiencies');
            $table->text('personality_traits');
            $table->text('ideals');
            $table->text('bonds');
            $table->text('flaws');
            $table->text('features_and_traits');
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

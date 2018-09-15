<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acrobatics');
            $table->integer('animal_handling');
            $table->integer('arcana');
            $table->integer('athletics');
            $table->integer('deception');
            $table->integer('history');
            $table->integer('insight');
            $table->integer('intimidation');
            $table->integer('investigation');
            $table->integer('medicine');
            $table->integer('nature');
            $table->integer('perception');
            $table->integer('performance');
            $table->integer('persuasion');
            $table->integer('religion');
            $table->integer('sleight_of_hand');
            $table->integer('stealth');
            $table->integer('survival');
            $table->unsignedInteger('character_id');
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
        Schema::dropIfExists('skills');
    }
}

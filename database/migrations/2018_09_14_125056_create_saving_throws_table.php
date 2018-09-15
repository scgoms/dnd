<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingThrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_throws', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('strength_saving_throw');
            $table->integer('dexterity_saving_throw');
            $table->integer('constitution_saving_throw');
            $table->integer('intelligence_saving_throw');
            $table->integer('wisdom_saving_throw');
            $table->integer('charisma_saving_throw');
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
        Schema::dropIfExists('saving_throws');
    }
}

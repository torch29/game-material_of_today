<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('day_of_week');
            $table->foreignId('area_id');
            $table->foreignId('character_id');
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
        Schema::table('skill_materials', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
            $table->dropForeign(['character_id']);
        });

        Schema::dropIfExists('skill_materials');
    }
}

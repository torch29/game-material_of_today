<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arm_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('day_of_week');
            $table->foreignId('hidden_palace_id');
            $table->foreign('arm_id');
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
            $table->dropForeign(['arm_id']);
        });

        Schema::dropIfExists('skill_materials');
    }
}

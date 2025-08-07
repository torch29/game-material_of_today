<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiddenPalacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hidden_palaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('area_id');
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
        Schema::table('hidden_palaces', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
        });

        Schema::dropIfExists('hidden_palaces');
    }
}

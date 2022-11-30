<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->string('DESC_KOR');
            $table->string('ANIMAL_PLANT');
            $table->string('SERVING_WT');
            $table->string('NUTR_CONT1');
            $table->string('NUTR_CONT2');
            $table->string('NUTR_CONT3');
            $table->string('NUTR_CONT4');
            $table->string('NUTR_CONT5');
            $table->string('NUTR_CONT6');
            $table->string('NUTR_CONT7');
            $table->string('NUTR_CONT8');
            $table->string('NUTR_CONT9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};

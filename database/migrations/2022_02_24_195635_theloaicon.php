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
        Schema::create('the_loai_con', function(Blueprint $table){
            $table->increments('maTLC');
            $table->unsignedInteger('maTL');
            $table->foreign('maTL')->references('maTL')->on('the_loai');
            $table->string('tenTLC', 100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_loai_con');
    }
};

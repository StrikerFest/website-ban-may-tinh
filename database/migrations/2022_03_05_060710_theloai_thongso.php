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
        Schema::create('the_loai_thong_so', function (Blueprint $table){
            $table->increments('maTLTS');
            $table->unsignedInteger('maTL');
            $table->foreign('maTL')->references('maTL')->on('the_loai');
            $table->unsignedInteger('maTS');
            $table->foreign('maTS')->references('maTS')->on('thong_so');
            $table->unique(['maTL', 'maTS']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_loai_thong_so');
    }
};

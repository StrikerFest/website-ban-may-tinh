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
        Schema::create('khuyen_mai', function(Blueprint $table){
            $table->increments('maKM');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->text('khuyenMai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyen_mai');
    }
};

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
        Schema::create('thong_tin_bao_hanh', function(Blueprint $table){
            $table->increments('maTTBH');
            $table->unsignedInteger('maSerial');
            $table->foreign('maSerial')->references('maSerial')->on('serial');
            $table->string('tenNBH', '50');
            $table->string('soDienThoaiNBH', '15');
            $table->dateTime('ngayBH');
            $table->text('noiDung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thong_tin_bao_hanh');
    }
};

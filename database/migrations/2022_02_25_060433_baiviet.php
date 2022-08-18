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
        Schema::create('bai_viet', function(Blueprint $table){
            $table->increments('maBV');
            $table->string('tenBV', 100);
            $table->unsignedInteger('maNV');
            $table->foreign('maNV')->references('maND')->on('nguoi_dung');
            $table->dateTime('ngayTao');
            $table->boolean('theLoai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viet');
    }
};

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
        Schema::create('phan_hoi_bai_viet', function(Blueprint $table){
            $table->increments('maPHBV');
            $table->unsignedInteger('maND');
            $table->foreign('maND')->references('maND')->on('nguoi_dung');
            $table->unsignedInteger('maBLBV');
            $table->foreign('maBLBV')->references('maBLBV')->on('binh_luan_bai_viet');
            $table->dateTime('ngayTao');
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
        Schema::dropIfExists('phan_hoi_bai_viet');
    }
};

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
        Schema::create('phan_hoi_san_pham', function(Blueprint $table){
            $table->increments('maPHSP');
            $table->unsignedInteger('maND');
            $table->foreign('maND')->references('maND')->on('nguoi_dung')->onDelete('cascade');
            $table->unsignedInteger('maBLSP');
            $table->foreign('maBLSP')->references('maBLSP')->on('binh_luan_san_pham')->onDelete('cascade');
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
        Schema::dropIfExists('phan_hoi_san_pham');
    }
};

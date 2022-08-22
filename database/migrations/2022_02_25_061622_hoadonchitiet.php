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
        Schema::create('hoa_don_chi_tiet', function(Blueprint $table){
            $table->increments('maHDCT');
            $table->unsignedInteger('maHD');
            $table->foreign('maHD')->references('maHD')->on('hoa_don');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->unsignedInteger('soLuong');
            $table->double('giaSP');
            $table->unsignedInteger('giamGia');
            $table->unique(['maHD', 'maSP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don_chi_tiet');
    }
};

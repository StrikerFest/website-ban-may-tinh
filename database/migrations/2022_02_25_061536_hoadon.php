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
        Schema::create('hoa_don', function(Blueprint $table){
            $table->increments('maHD');
            $table->unsignedInteger('maKH');
            $table->foreign('maKH')->references('maND')->on('nguoi_dung');
            $table->unsignedInteger('maNV')->nullable();
            $table->foreign('maNV')->references('maND')->on('nguoi_dung');
            $table->dateTime('ngayTao');
            $table->string('tenNguoiNhan', 50);
            $table->string('soDienThoai', 15);
            $table->string('diaChi', 400);
            $table->unsignedInteger('maPTTT');
            $table->foreign('maPTTT')->references('maPTTT')->on('phuong_thuc_thanh_toan');
            $table->unsignedInteger('maTTHD');
            $table->foreign('maTTHD')->references('maTTHD')->on('tinh_trang_hoa_don');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
};

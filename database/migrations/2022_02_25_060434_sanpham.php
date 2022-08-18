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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('maSP');
            $table->string('tenSP', 200);
            $table->double('giaSP');
            $table->unsignedInteger('soLuong')->default('0');
            $table->unsignedInteger('giamGia')->default('0');
            $table->unsignedInteger('maBV')->nullable();
            $table->foreign('maBV')->references('maBV')->on('bai_viet');
            $table->unsignedInteger('maNSX');
            $table->foreign('maNSX')->references('maNSX')->on('nha_san_xuat');
            $table->unsignedInteger('maTLC');
            $table->foreign('maTLC')->references('maTLC')->on('the_loai_con');
            $table->unsignedInteger('maTTSP');
            $table->foreign('maTTSP')->references('maTTSP')->on('tinh_trang_san_pham');
            $table->unsignedInteger('maBH');
            $table->foreign('maBH')->references('maBH')->on('bao_hanh');
            $table->boolean('dacBiet')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
};

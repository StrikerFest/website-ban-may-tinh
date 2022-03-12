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
            $table->text('moTa');
            $table->unsignedInteger('soLuong');
            $table->unsignedInteger('giamGia');
            $table->unsignedInteger('maNSX');
            $table->foreign('maNSX')->references('maNSX')->on('nha_san_xuat');
            $table->unsignedInteger('maTL');
            $table->foreign('maTL')->references('maTL')->on('the_loai');
            $table->unsignedInteger('maTTSP');
            $table->foreign('maTTSP')->references('maTTSP')->on('tinh_trang_san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

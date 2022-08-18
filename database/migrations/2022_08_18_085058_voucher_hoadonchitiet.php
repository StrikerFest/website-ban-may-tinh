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
        Schema::create('voucher_hoa_don_chi_tiet', function(Blueprint $table){
            $table->increments('maVHDCT');
            $table->unsignedInteger('maVoucher');
            $table->foreign('maVoucher')->references('maVoucher')->on('voucher');
            $table->unsignedInteger('maHDCT');
            $table->foreign('maHDCT')->references('maHDCT')->on('hoa_don_chi_tiet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_hoa_don_chi_tiet');
    }
};

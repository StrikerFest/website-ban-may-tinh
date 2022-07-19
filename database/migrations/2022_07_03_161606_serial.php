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
        Schema::create('serial', function(Blueprint $table){
            $table->increments('maSerial');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->string('serial', 30)->unique();
            $table->unsignedInteger('maNK');
            $table->foreign('maNK')->references('maNK')->on('nhap_kho');
            $table->unsignedInteger('maHDCT')->nullable();
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
        Schema::dropIfExists('serial');
    }
};

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
        Schema::create('nhap_kho', function(Blueprint $table){
            $table->increments('maNK');
            $table->unsignedInteger('maNPP');
            $table->foreign('maNPP')->references('maNPP')->on('nha_phan_phoi');
            $table->dateTime('ngayNhap');
            $table->unsignedInteger('maNV');
            $table->foreign('maNV')->references('maND')->on('nguoi_dung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop_if_exists('nhap_kho');
    }
};

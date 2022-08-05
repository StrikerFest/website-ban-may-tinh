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
        Schema::create('san_pham_voucher', function(Blueprint $table){
            $table->increments('maSPV');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->unsignedInteger('maVoucher');
            $table->foreign('maVoucher')->references('maVoucher')->on('voucher');
            $table->boolean('kichHoat');
            $table->unique(['maSP', 'maVoucher']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham_voucher');
    }
};

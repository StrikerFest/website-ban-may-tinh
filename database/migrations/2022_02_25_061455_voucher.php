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
        Schema::create('voucher', function(Blueprint $table){
            $table->increments('maVoucher');
            $table->string('tenVoucher', 30);
            $table->text('moTa');
            $table->unsignedInteger('maTLV');
            $table->foreign('maTLV')->references('maTLV')->on('the_loai_voucher');
            $table->double('giaTri')->default('0');
            $table->unsignedInteger('soLuong');
            $table->unsignedInteger('maSP')->nullable();
            $table->foreign('maSP')->references('maSP')->on('san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher');
    }
};

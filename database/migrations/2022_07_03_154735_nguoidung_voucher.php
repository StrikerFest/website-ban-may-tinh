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
        Schema::create('nguoi_dung_voucher', function(Blueprint $table){
            $table->increments('maNDV');
            $table->unsignedInteger('maND');
            $table->foreign('maND')->references('maND')->on('nguoi_dung');
            $table->unsignedInteger('maVoucher');
            $table->foreign('maVoucher')->references('maVoucher')->on('voucher');
            $table->unique(['maND', 'maVoucher']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dung_voucher');
    }
};

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
        Schema::create('binh_luan_san_pham', function(Blueprint $table){
            $table->increments('maBLSP');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham')->onDelete('cascade');
            $table->unsignedInteger('maND');
            $table->foreign('maND')->references('maND')->on('nguoi_dung')->onDelete('cascade');
            $table->dateTime('ngayTao');
            $table->text('noiDung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binh_luan_san_pham');
    }
};

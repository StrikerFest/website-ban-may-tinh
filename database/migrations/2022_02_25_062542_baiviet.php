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
        Schema::create('bai_viet', function(Blueprint $table){
            $table->increments('maBV');
            $table->string('tieuDe', 100);
            $table->string('anh', 300);
            $table->unsignedInteger('maNV');
            $table->foreign('maNV')->references('maND')->on('nguoi_dung');
            $table->unsignedInteger('tinhTrang');
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
        Schema::dropIfExists('bai_viet');
    }
};

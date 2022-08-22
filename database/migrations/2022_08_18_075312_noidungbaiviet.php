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
        Schema::create('noi_dung_bai_viet', function (Blueprint $table){
            $table->increments('maNDBV');
            $table->unsignedInteger('maBV');
            $table->foreign('maBV')->references('maBV')->on('bai_viet');
            $table->string('tieuDe', 100)->nullable();
            $table->string('anh', 300)->nullable();
            $table->text('noiDung')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noi_dung_bai_viet');
    }
};

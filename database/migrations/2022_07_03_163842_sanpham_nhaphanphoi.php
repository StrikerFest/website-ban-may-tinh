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
        Schema::create('san_pham_nha_phan_phoi', function(Blueprint $table){
            $table->increments('maSPNPP');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->unsignedInteger('maNPP');
            $table->foreign('maNPP')->references('maNPP')->on('nha_phan_phoi');
            $table->unique(['maSP', 'maNPP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham_nha_phan_phoi');
    }
};

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
        Schema::create('san_pham_thong_so', function(Blueprint $table){
            $table->increments('maSPTS');
            $table->unsignedInteger('maSP');
            $table->foreign('maSP')->references('maSP')->on('san_pham');
            $table->unsignedInteger('maTS');
            $table->foreign('maTS')->references('maTS')->on('thong_so');
            $table->string('giaTri', 100);
            $table->unique(['maSP', 'maTS']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham_thong_so');
    }
};

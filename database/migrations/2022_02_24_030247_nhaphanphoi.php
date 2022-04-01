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
        Schema::create('nha_phan_phoi', function(Blueprint $table){
            $table->increments('maNPP');
            $table->string('tenNPP', 50);
            $table->string('diaChiNPP', 300);
            $table->string('soDienThoai', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop_if_exists('nha_phan_phoi');
    }
};

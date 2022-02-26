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
        Schema::create('nguoi_dung', function(Blueprint $table){
            $table->increments('maND');
            $table->string('tenND', 50);
            $table->string('emailND', 75)->unique();
            $table->string('matKhauND', 20);
            $table->unsignedInteger('maCV');
            $table->foreign('maCV')->references('maCV')->on('chuc_vu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_dung');
    }
};

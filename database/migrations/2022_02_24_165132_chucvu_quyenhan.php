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
        Schema::create('chuc_vu_quyen_han', function(Blueprint $table){
            $table->increments('maCVQH');
            $table->unsignedInteger('maCV');
            $table->foreign('maCV')->references('maCV')->on('chuc_vu');
            $table->unsignedInteger('maQH');
            $table->foreign('maQH')->references('maQH')->on('quyen_han');
            $table->unique(['maCV', 'maQH']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuc_vu_quyen_han');
    }
};

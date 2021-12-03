<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNvNn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv_nn', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('mann', 5);
            $table->primary(['manv', 'mann']);
            $table->foreign('manv')->references('manv')->on('nhanvien');
            $table->foreign('mann')->references('mann')->on('ngoaingu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nv_nn');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateNvCc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv_cc', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('macc', 5);
            $table->primary(['manv', 'macc']);
            $table->foreign('manv')->references('manv')->on('nhanvien');
            $table->foreign('macc')->references('macc')->on('congcu');
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
        Schema::dropIfExists('nv_cc');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNvDa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv_da', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('mada', 5);
            $table->primary(['manv', 'mada']);
            $table->foreign('manv')->references('manv')->on('nhanvien');
            $table->foreign('mada')->references('mada')->on('duan');
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
        Schema::dropIfExists('nv_da');
    }
}

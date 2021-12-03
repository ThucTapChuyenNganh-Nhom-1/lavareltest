<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateNvKn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nv_kn', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('makn', 5);
            $table->primary(['manv', 'makn']);
            $table->foreign('manv')->references('manv')->on('nhanvien');
            $table->foreign('makn')->references('makn')->on('kynang');
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
        Schema::dropIfExists('nv_kn');
    }
}

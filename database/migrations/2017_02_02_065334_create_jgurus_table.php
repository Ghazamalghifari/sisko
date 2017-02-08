<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJgurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jgurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jadwal');
            $table->string('mulai_guru');
            $table->string('selesai_guru');
            $table->string('hari_guru');
            $table->string('keterangan_guru');
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
        Schema::dropIfExists('jgurus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJngajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jngajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_guru');
            $table->integer('id_pelajaran');
            $table->string('mulai_ngajar');
            $table->string('selesai_ngajar');
            $table->string('hari_ngajar');
            $table->string('keterangan_ngajar');
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
        Schema::dropIfExists('jngajars');
    }
}

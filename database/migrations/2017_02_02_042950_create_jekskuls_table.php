<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJekskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jekskuls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_guru');
            $table->integer('id_ekskul');
            $table->string('mulai_ekskul');
            $table->string('selesai_ekskul');
            $table->string('hari_ekskul');
            $table->string('keterangan_ekskul');
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
        Schema::dropIfExists('jekskuls');
    }
}

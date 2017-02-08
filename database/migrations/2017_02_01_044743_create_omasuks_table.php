<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omasuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_obat');
            $table->integer('id_okategori');
            $table->string('stok_obat');
            $table->integer('id_osatuan');
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
        Schema::dropIfExists('omasuks');
    }
}

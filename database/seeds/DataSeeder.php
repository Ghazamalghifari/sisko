<?php

use Illuminate\Database\Seeder;
use App\Kelas;
use App\Alumni;
use App\Ekskul;
use App\Pelajaran;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kelas = new Kelas();
        $kelas->id = "0";
        $kelas->kelas = "Sudah Lulus";
        $kelas->nama_kelas = "Sudah Lulus";
        $kelas->jumlah_siswa = "0";
        $kelas->status = "0";
        $kelas->save();

        $alumni = new Alumni();
        $alumni->id = "0";
        $alumni->angkatan = "Belum Lulus";
        $alumni->tahun_angkatan = "Belum Lulus";
        $alumni->jumlah_siswa = "0";
        $alumni->status = "0";
        $alumni->save();


    }
}
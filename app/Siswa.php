<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = ['nama_siswa','nomor_induk','tanggal_lahir','tempat_lahir','jenis_kelamin','agama','pendidikan_sebelumnya','alamat_siswa','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','alamat_ayah','alamat_ibu','foto_siswa','id_angkatan','id_kelas'];

        public function alumni()
    {
    	return $this->belongsTo('App\Alumni','id_angkatan');
    }

        public function kelas()
    {
    	return $this->belongsTo('App\Kelas','id_kelas');
    }
}

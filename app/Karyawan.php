<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable = ['id','nik','nama_karyawan','id_pekerjaan','tugas','no_telp','alamat'];

    public function pekerjaan()
    {
    	return $this->belongsTo('App\Pekerjaan','id_pekerjaan');
    }
}
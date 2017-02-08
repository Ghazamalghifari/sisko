<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $fillable = ['id','id_siswa','bertugas'];

        public function siswa()
    {
    	return $this->belongsTo('App\Siswa','id_siswa');
    }
}

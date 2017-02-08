<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minjam extends Model
{
    //
    protected $fillable = ['id','id_siswa','id_buku','minjam'];

        public function siswa()
    {
    	return $this->belongsTo('App\Siswa','id_siswa');
    }

        public function buku()
    {
    	return $this->belongsTo('App\Buku','id_buku');
    }
}

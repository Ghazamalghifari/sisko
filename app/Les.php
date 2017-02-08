<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Les extends Model
{
    //
    protected $fillable = ['id','id_guru','mata_pelajaran','jumlah_siswa'];

    public function guru()
    {
    	return $this->belongsTo('App\Guru','id_guru');
    }
}

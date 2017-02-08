<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jngajar extends Model
{
    //
    protected $fillable = ['id','id_guru','id_pelajaran','mulai_ngajar','selesai_ngajar','hari_ngajar','keterangan_ngajar'];

    public function guru()
    {
    	return $this->belongsTo('App\Guru','id_guru');
    }


    public function pelajaran()
    {
    	return $this->belongsTo('App\Pelajaran','id_pelajaran');
    }
}

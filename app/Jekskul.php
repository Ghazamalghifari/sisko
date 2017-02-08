<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jekskul extends Model
{
    //
    protected $fillable = ['id','id_guru','id_ekskul','mulai_ekskul','selesai_ekskul','hari_ekskul','keterangan_ekskul'];

    public function guru()
    {
    	return $this->belongsTo('App\Guru','id_guru');
    }


    public function ekskul()
    {
    	return $this->belongsTo('App\Ekskul','id_ekskul');
    }
}

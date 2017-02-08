<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jles extends Model
{
    //
    protected $fillable = ['id','id_les','mulai_les','selesai_les','hari_les','keterangan_les'];

    public function les()
    {
    	return $this->belongsTo('App\Les','id_les');
    }


    public function guru()
    {
    	return $this->belongsTo('App\Guru','id_les');
    }
}

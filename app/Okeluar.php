<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Okeluar extends Model
{
    //
    protected $fillable = ['id','id_omasuks','obat_keluar'];

    public function omasuk()
    {
    	return $this->belongsTo('App\Omasuk','id_omasuks');
    }
}

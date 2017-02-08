<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    //
    protected $fillable = ['id','id_karyawan','bayaran_kantin'];


    public function karyawan()
    {
    	return $this->belongsTo('App\Karyawan','id_karyawan');
    }
}

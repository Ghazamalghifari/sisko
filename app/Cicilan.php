<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicilan extends Model
{
    //
    protected $fillable = ['id','id_karyawan','tanggal_cicilan','status_cicilan'];

    
    public function kantin()
    {
    	return $this->belongsTo('App\Kantin','id_karyawan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Omasuk extends Model
{
    //
    protected $fillable = ['id','nama_obat','id_okategori','stok_obat','id_osatuan'];

    public function okategori()
    {
    	return $this->belongsTo('App\Okategori','id_okategori');
    }

    public function osatuan()
    {
    	return $this->belongsTo('App\Osatuan','id_osatuan');
    }
}

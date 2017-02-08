<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    protected $fillable = ['id','angkatan','tahun_angkatan','jumlah_siswa','status'];    

}

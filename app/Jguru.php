<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jguru extends Model
{
    //
    protected $fillable = ['id','nama_jadwal','mulai_guru','selesai_guru','hari_guru','keterangan_guru'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jsekolah extends Model
{
    //
    protected $fillable = ['id','nama_jadwal','mulai','selesai','hari','keterangan'];
}

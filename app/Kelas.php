<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $fillable = ['id','kelas','nama_kelas','jumlah_siswa','status'];
}

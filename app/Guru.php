<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $fillable = ['id','nip','nama_guru','jenis_kelamin','ttl','pendidikan','agama','status','alamat','tahun_lulus','jabatan'];  
}

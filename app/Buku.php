<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = ['kode','nama_buku','stok'];
}

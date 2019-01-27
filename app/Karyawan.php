<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';

    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
    'id_karyawan', 
    'nama_karyawan',
    'alamat_karyawan',
    'telpon_karyawan'
    ];
}

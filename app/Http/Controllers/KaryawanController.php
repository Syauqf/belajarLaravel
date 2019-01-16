<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
class KaryawanController extends Controller
{
    function index(){
        $karyawan = Karyawan::get(['id_karyawan', 'nama_karyawan', 'alamat_karyawan','telpon_karyawan']);
        //var_dump($karyawan);
        return view('karyawan.index', compact('karyawan'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        # code...
        $data = array();
        $data['selamat'] = "Selamat datang";
        $data['q'] = "yooii!!!";
        return view('Home', $data);
    }
    public function List()
    {
        # code...
        return view('list');
    }
    public function Ukik()
    {
        # code...
        $ukik = array();
        $ukik['ukik'] = "Ahmad Syauqi Futtaqi";
        return view('ukik.ukik', $ukik);
    }
}





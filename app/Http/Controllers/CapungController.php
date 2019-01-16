<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
    //
    public function Index(){
        return view('telo');
    }
    public function Pujangga(){
        return"bebek goreng by pujangga";
    }
    function siti(){
        return view('mamalia/kucing');
    }
}

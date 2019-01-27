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
    function create(){
        return view('karyawan.create');
    }
    public function store(Request $request){
        $id = $request->input('txt_id');
        $name = $request->input('txt_name');
        $address = $request->input('txt_address');
        $phone_number = $request->input('txt_phone_number');

        Karyawan::create([
            'id_karyawan'=>$id, 
            'nama_karyawan'=>$name,
            'alamat_karyawan'=>$address,
            'telpon_karyawan'=>$phone_number
        ]);
        return redirect('http://localhost/coba-laravel/public/karyawan');
    }
    public function edit($id)
    {
        $karyawan = Karyawan::where('id_karyawan',$id)->get();
        return view('karyawan.edit',compact('karyawan'));
    }
    public function update(Request $request, $id)
    {
        $name = $request->input("txt_name");
        $address = $request->input("txt_address");
        $phone_number = $request->input("txt_phone_number");
        Karyawan::where('id_karyawan',$id)->update([ 
            'nama_karyawan' => $name,
            'alamat_karyawan' => $address,
            'telpon_karyawan' => $phone_number
           ]);
           return redirect ('http://localhost/coba-laravel/public/karyawan');   
    }
    public function destroy($id)
    {
        Karyawan::where('id_karyawan',$id)->delete();
        return redirect ('http://localhost/coba-laravel/public/karyawan')->with('alert-success','Data berhasi dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    function index(){
        $supplier = Supplier::get(['supplier_id', 'supplier_name', 'supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
    }
    function create(){
        return view('supplier.create');
    }
    public function store(Request $request){
        $id = $request->input('txt_id');
        $name = $request->input('txt_name');
        $address = $request->input('txt_address');

        Supplier::create([
            'supplier_id'=>$id, 
            'supplier_name'=>$name,
            'supplier_address'=>$address
        ]);
        return redirect('http://localhost/coba-laravel/public/supplier');
    }
    public function edit($id)
    {
        $supplier = Supplier::where('supplier_id',$id)->get();
        return view('supplier.edit',compact('supplier'));
    }
    public function update(Request $request, $id)
    {
        $name = $request->input("txt_name");
        $address = $request->input("txt_address");
        Supplier::where('supplier_id',$id)->update([ 
            'supplier_name' => $name,
            'supplier_address' => $address
           ]);
           return redirect ('http://localhost/coba-laravel/public/supplier');   
    }
    public function destroy($id)
    {
        Supplier::where('supplier_id',$id)->delete();
        return redirect ('http://localhost/coba-laravel/public/supplier')->with('alert-success','Data berhasi dihapus!');
    }
}
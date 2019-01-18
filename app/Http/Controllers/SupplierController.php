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
        $idS = $request->input('txt_id' );
        $nameS = $request->input('txt_name');
        $addressS = $request->input('txt_address');

        Supplier::create([
            'supplier_id'=>$idS, 
            'supplier_name'=>$nameS,
            'supplier_address'=>$addressS
        ]);
        return redirect('http://localhost/coba-laravel/public/supplier');
    }
}
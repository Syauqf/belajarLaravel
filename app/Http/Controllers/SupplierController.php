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
}
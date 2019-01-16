<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "asaoy geboyu";
        $customer = Customer::get(['customer_id', 'name', 'address']);
        //var_dump($customer);
        return view('customer.index', compact('customer'));
    }
    function create(){
        //echo"telo";
        return view('customer.create');
    }
    function store(Request $request){
        echo "cobak";
    }
}

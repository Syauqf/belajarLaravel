<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
        //echo "asaoy geboyu";
        $employee = Employee::get(['employee_id', 'employee_name', 'employee_address', 'employee_phone_number']);
        //var_dump($customer);
        return view('employee.index', compact('employee'));
    }
    function create(){
        //echo"telo";
        return view('employee.create');
    }
    public function store(Request $request){
        //echo "cobak";
        $id = $request->input('txt_id');
        $name = $request->input('txt_name');
        $address = $request->input('txt_address');
        $phone_number = $request->input('txt_phone_number');

        Employee::create([
            'employee_id' =>$id, 
            'employee_name'=>$name,
            'employee_address'=>$address,
            'employee_phone_number'=>$phone_number
        ]);

        return redirect('http://localhost/coba-laravel/public/employee');
    }
    function show($employee_id){
        //echo "ember";
        //echo $id;
        
        //select * from Customer where customer_id=$id
        $employee = Employee::where('employee_id', $employee_id);

        //var_dump($customer);
        return view('employee.show', ['employee' => Employee::where('employee_id', $employee_id)]);
    }
    public function edit($employee_id)
    {
        $employee = Employee::where('employee_id',$employee_id)->get();
        return view('employee.edit',compact('employee'));
    }
    public function update(Request $request, $employee_id)
    {
        $employee_name = $request->input("txt_name");
        $employee_address = $request->input("txt_addres");
        $employee_phone_number = $request->input("txt_phone_number");
        Employee::where('employee_id',$employee_id)->update([ 
            'employee_name' => $employee_name,
            'employee_address' => $employee_address,
            'employee_phone_number' => $employee_phone_number
           ]);
           return redirect ('http://localhost/coba-laravel/public/employee');   
    }
    public function destroy($employee_id)
    {
        Employee::where('employee_id',$employee_id)->delete();
        return redirect ('http://localhost/coba-laravel/public/employee')->with('alert-success','Data berhasi dihapus!');
    }
}

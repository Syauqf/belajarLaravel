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
    public function store(Request $request){
        //echo "cobak";
        $id = $request->input('txt_id');
        $name = $request->input('txt_name');
        $address = $request->input('txt_address');
        echo "id = ",$id,"<br>",
        "nama = ",$name,"<br>",
        "alamat = ",$address;

        Customer::create([
            'customer_id' =>$id, 
            'name'=>$name,
            'address'=>$address
        ]);

        return redirect('http://localhost/coba-laravel/public/customer');
    }
    function show($id){
        //echo "ember";
        //echo $id;
        
        //select * from Customer where customer_id=$id
        $customer = Customer::where('customer_id', $id);

        //var_dump($customer);
        return view('customer.show', ['customer' => Customer::where('customer_id', $id)]);
    }
    public function edit($id)
    {
        $customer = Customer::where('customer_id',$id)->get();
        return view('customer.edit',compact('customer'));
    }
    public function update(Request $request, $id)
    {
        $name = $request->input("txt_name");
        $address = $request->input("txt_addres");
        Customer::where('customer_id',$id)->update([ 
            'name' => $name,
            'address' => $address
           ]);
           return redirect ('http://localhost/coba-laravel/public/customer');   
    }
    public function destroy($id)
    {
        Customer::where('customer_id',$id)->delete();
        return redirect ('http://localhost/coba-laravel/public/customer')->with('alert-success','Data berhasi dihapus!');
    }
    public function hapus(Request $request, $id)
    {
        $customer = Customer::where('customer_id',$id)->delete();
        return view('customer');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User;
use App\Models\Admin\Customers;
use Auth;


class CustomerController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function add(){ 
        $useremail = Auth::user()->email;
        $count = Customers::where('username',$useremail)->count();
        if($count==0){
            $custcode = 'CUST0000001';
        }
        else{
            $row = Customers::select('cust_code')->where('username',$useremail)->orderBy('id','desc')->limit(1)->get();
            $custcode = $row[0]->cust_code;
            $custcode++;
        }
        return view('admin/customer/customeradd')->with('custcode',$custcode);
    }
    function read(){
        $useremail = Auth::user()->email;
        $customers = Customers::where('username',$useremail)->get();
        return view('admin/customer/customerlist')->with('customers',$customers);
    }
    function get_first(Request $request){
        $useremail = Auth::user()->email;
        $customers = Customers::where('username',$useremail)->where('cust_name',$request->cust_name)->first();
        return $customers;
    }
    function store(Request $request){
        $customer = new Customers();
        $customer->cust_code = $request->input('cust_code');
        $customer->cust_name = $request->input('cust_name');
        $customer->address1 = $request->input('address1');
        $customer->address2 = $request->input('address2');
        $customer->email = $request->input('email');
        $customer->phno = $request->input('phno');
        $customer->username = $request->input('username');
        $customer->save();
        return redirect()->back()->with('msg_name', 'your message');
    }
}

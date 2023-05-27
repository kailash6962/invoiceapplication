<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Invoices;
use App\Models\Admin\Customers;
use Auth;

class InvoiceController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function read(){ 
        $useremail = Auth::user()->email;
        $invoices = Invoices::where('username',$useremail)->get();
        return view('admin/invoice/invoicelist')->with('invoices',$invoices);
    }
    function add(){
        $useremail = Auth::user()->email;
        $customers = Customers::where('username',$useremail)->get();
        return view('admin/invoice/newinvoice')->with('customers',$customers);
    }
    function createinvoice(Request $request){
        if($request->input('amt_due')==0){
            $status = 'Paid';
        }
        if($request->input('amt_due')>0){
            $status = 'UnPaid';
        }
        $invoice = new Invoices();
        $invoice->cust_code  = $cust_code  =   $request->input('cust_code');
        $invoice->cust_name  = $cust_name  =   $request->input('cust_name');
        $invoice->address    = $address  =   $request->input('address');
        $invoice->inv_amt    = $inv_amt  =   $request->input('inv_amt');
        $invoice->status     = $status;
        $invoice->item       = $item  =   $request->input('item');
        $invoice->price      = $inv_amt  =   $request->input('inv_amt');
        $invoice->quantity   = $quantity  =   $request->input('quantity');
        $invoice->date_added = $date_added  =   date('Y-m-d');
        $invoice->amt_paid   = $amt_paid  =   $request->input('amt_paid');
        $invoice->amt_due    = $amt_due  =   $request->input('amt_due');
        $invoice->username   = Auth::user()->email;
        $invoice->save();
        $useremail           = Auth::user()->email;
        $invoices = Invoices::where('username',$useremail)->orderBy('id', 'desc')->limit(1)->get();
        return view('admin/invoice/invoiceform')->with('invoices',$invoices);
    }
}

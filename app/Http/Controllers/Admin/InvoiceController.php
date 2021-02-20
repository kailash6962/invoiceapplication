<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Invoices;
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
}

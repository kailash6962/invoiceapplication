<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Admin\Item;

use Auth;

class ItemController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }
    function add(){ 
        $useremail = Auth::user()->email;
        $count = Item::where('username',$useremail)->count();
        if($count==0){
            $itemcode = 'ITEM0000001';
        }
        else{
            $row = Item::select('item_code')->where('username',$useremail)->orderBy('id','desc')->limit(1)->get();
            $itemcode = $row[0]->item_code;
            $itemcode++;
        }
        return view('admin/item/itemadd')->with('itemcode',$itemcode);
    }
    function read(){
        $useremail = Auth::user()->email;
        $items = Item::where('username',$useremail)->get();
        return view('admin/item/itemlist')->with('items',$items);
    }
    function store(Request $request){
        $item = new Item();
        $item->item_code = $request->input('item_code');
        $item->item_name = $request->input('item_name');
        $item->item_price = $request->input('item_price');
        $item->username = Auth::user()->email;
        $item->date_added = date('y-m-d');
        $item->save();
        Session::flash('success','Item Added Successfully.');
        return redirect()->back();
    }
}

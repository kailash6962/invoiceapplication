<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}

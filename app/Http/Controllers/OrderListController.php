<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
class OrderListController extends Controller
{
    public function index(){
		$p = Orders::all()->where('uid',session('uid'));
		$tmp=0;
		foreach($p as $pro){
			$tmp = $tmp + $pro->price;
		}
		return view('orderlist.index')->with('orders',$p)->with('totalprice',$tmp);
	}
}

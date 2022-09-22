<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carts;
use App\Orders;
class CartController extends Controller
{
    public function index(){
		$c = Carts::all()->where('uid',session('uid'));
		$tprice=0;
		foreach($c as $q){
			$tprice = $tprice + $q->price;
		}
		return view('cart.index')->with('carts',$c)->with('totalprice',$tprice);
	}
	public function order(Request $req){
		$c = Carts::all()->where('uid',session('uid'));
		foreach($c as $tmpc){
			$p = new Orders;
			$p->uid = session('uid');
			$p->pid = $tmpc->pid;
			$p->pname = $tmpc->pname;
			$p->price = $tmpc->price;
			$p->quantity = $tmpc->quantity;
			$p->save();
			Carts::destroy($tmpc->id);
		}
		return redirect()->route('home.index');
	}
}

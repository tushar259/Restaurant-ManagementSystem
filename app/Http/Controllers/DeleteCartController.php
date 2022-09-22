<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carts;
use App\Products;
class DeleteCartController extends Controller
{
    public function index($cartid){
		$c = Carts::find($cartid);
		return view('deletecart.index')->with('carts',$c);
	}
	public function delete(Request $req){
		$tval = $req->quantity;
		$c = Carts::destroy($req->cartid);
		$p = Products::find($req->pid);
		$tqnt = $p->quantity;
		$tval = $tval + $tqnt;
		$p->quantity = $tval;
		$p->save();
		return redirect()->route('cart.index');
	}
}

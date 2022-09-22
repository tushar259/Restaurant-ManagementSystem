<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carts;
use App\Products;
class AddRemoveCartController extends Controller
{
    public function index($cartid){
		$c = Carts::find($cartid);
		return view('addremovecart.index')->with('carts',$c);
	}
	public function update(Request $req){
		$tqnt=0;
		$cqnt=0;
		$pqnt=0;
		$cprice=0;
		if($req->quantity >= 0){
			$c = Carts::find($req->cartid);
			$cqnt = $c->quantity;
			$p = Products::find($c->pid);
			$pqnt = $p->quantity;
			if($req->quantity > $c->quantity){
				$cqnt = $req->quantity - $cqnt;
				$pqnt = $pqnt - $cqnt;
				$p->quantity = $pqnt;
				$p->save();
				$cprice = $req->quantity * $p->price;
				$c->quantity = $req->quantity;
				$c->price = $cprice;
				$c->save();
				return redirect()->route('cart.index');
			}
			else if($req->quantity == $c->quantity){
				return redirect()->route('cart.index');
			}
			else{
				$cqnt = $cqnt - $req->quantity;
				$pqnt = $pqnt + $cqnt;
				$p->quantity = $pqnt;
				$p->save();
				$cprice = $req->quantity * $p->price;
				$c->quantity = $req->quantity;
				$c->price = $cprice;
				$c->save();
				return redirect()->route('cart.index');
			}
		}
	}
}

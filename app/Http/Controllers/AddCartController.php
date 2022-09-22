<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Carts;
class AddCartController extends Controller
{
    public function index(Request $req,$pid){
		$p = Products::find($pid);
		return view('addcart.index')->with('pro',$p);
	}
	public function addtocart(Request $req){
		$p = Products::find($req->id);
		$tqnt = $p->quantity;
		$tqnt = $tqnt - $req->quantity;
		if($tqnt>=5){
			
		    $p->quantity = $tqnt;
		    $p->save();
		    $cartprice = $p->price * $req->quantity;
		
		    $c = new Carts;
		    $c->uid = session('uid');
		    $c->pid = $p->id;
		    $c->pname = $p->pname;
		    $c->price = $cartprice;
		    $c->quantity = $req->quantity;
		    $c->save();
		    return redirect()->route('home.index');
		}
		else{
		    return redirect()->route('home.index');	
		}
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Carts;

class AddCartAjaxController extends Controller
{
    public function index(Request $req){
		$p = Products::find($req->id);
		$tqnt = $p->quantity;
		$tqnt = $tqnt - $req->quantity;
		if($tqnt>=5){
		    /*$p->quantity = $tqnt;
		    $p->save();
		    $cartprice = $p->price * $req->quantity;
		
		    $c = new Carts;
		    $c->uid = session('uid');
		    $c->pid = $p->id;
		    $c->pname = $p->pname;
		    $c->price = $cartprice;
		    $c->quantity = $req->quantity;
		    $c->save();*/
		    return response()->json(['success'=>'Food is successfully added']);
		}
		else{
		    return redirect()->route('home.index');	
		}
		
	}
}

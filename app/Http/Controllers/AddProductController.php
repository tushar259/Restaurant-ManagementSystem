<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class AddProductController extends Controller
{
    public function index(Request $req){
	    return view('addproduct.index');
	}
	public function add(Request $req){
	    $p = new Products;
		$p->pname = $req->pname;
		$p->price = $req->price;
		$p->quantity = $req->quantity;
		$p->save();
	    return redirect()->route('productlist.index');
	}
}

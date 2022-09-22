<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class EditProductController extends Controller
{
    public function index($getid){
        
		$p = Products::find($getid);
		return view('editproduct.index')->with('product',$p);
	}
	public function update(Request $req, $getid){

    	$p 			= Products::find($getid);
    	$p->pname 	= $req->pname;
    	$p->price 	= $req->price;
    	$p->quantity 	= $req->quantity;
    	$p->save();
    	return redirect()->route('productlist.index');
    }
}

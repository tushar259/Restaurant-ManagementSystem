<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductListController extends Controller
{
    public function index(Request $req){
        
		$p = Products::all();
		return view('productlist.index')->with('product',$p);
	}
	public function delete(Request $req){
    	$acc = Products::destroy($req->pid);
    	return redirect()->route('productlist.index');
    }
}

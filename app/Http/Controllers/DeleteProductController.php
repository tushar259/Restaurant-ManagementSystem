<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class DeleteProductController extends Controller
{
    public function index($getid){
        
		$p = Products::find($getid);
		return view('deleteproduct.index')->with('product',$p);
	}
	public function delete($getid){
    	$p = Products::destroy($getid);
    	return redirect()->route('productlist.index');
    }
}

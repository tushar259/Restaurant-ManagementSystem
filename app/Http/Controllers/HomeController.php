<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class HomeController extends Controller
{
    public function index(Request $req){
	    
		$p=Products::all()->where('quantity','>',5);
		return view('home.index')->with('p',$p);
		
		
		
        
	}
	public function mitu(Request $req)
	{
		
		
		$this->validate($req, [
    		'searchbox' => 'required',
    	]);
		
		
		
		$p = DB::table('products')->where('pname','like','%'.$req->searchbox.'%')->get();
		/*foreach($p as $m){
	        echo $m->id;
			echo " ";
		}*/
		return view('home.product')->with('mitu',$p);
		
	}
}

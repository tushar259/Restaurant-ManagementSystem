<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class SearchController extends Controller
{
    public function index(Request $req){
		$p = Products::all()->where('pname', 'LIKE', '%'.$req->searchbox.'%');
		return view('search.index')->with('mitu',$p);
	}
}

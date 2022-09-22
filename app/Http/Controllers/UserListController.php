<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserListController extends Controller
{
    public function index(Request $req){
	    $u = Users::all()->where('type','user');
		return view('userlist.index')->with('us',$u);
	}
}

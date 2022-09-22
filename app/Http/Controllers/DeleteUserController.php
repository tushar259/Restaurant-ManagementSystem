<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class DeleteUserController extends Controller
{
    public function index($getid){
        
		$u = Users::find($getid);
		return view('deleteuser.index')->with('us',$u);
	}
	public function delete($getid){
	    $u = Users::destroy($getid);
		return redirect()->route('userlist.index');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class EditProfileController extends Controller
{
    public function index(Request $req){
        
		$acc = Users::find(session('uid'));
		return view('editprofile.index')->with('account',$acc);
	}
	public function update(Request $req){

    	$account 			= Users::find($req->id);
    	$account->username 	= $req->username;
    	$account->phone 	= $req->phone;
    	$account->address 	= $req->address;
    	$account->save();
    	return redirect()->route('profile.index');
    }
}

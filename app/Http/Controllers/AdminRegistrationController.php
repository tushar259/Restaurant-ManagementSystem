<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Pin;

class AdminRegistrationController extends Controller
{
    public function index(){

    	return view('adminregistration.index');
    }
	public function verify(Request $req){
		$this->validate($req, [
    		'username' => 'required|unique:users',
    		'password' => 'required',
    		'phone' => 'required',
    		'address' => 'required',
			'pinId' => 'required'
    	]);
		
	    $pin = Pin::find($req->pinId);
		if($pin){
		    $users = new Users;
		    $users->username= $req->username;
		    $users->password= $req->password;
		    $users->phone= $req->phone;
		    $users->address= $req->address;
		    $users->type= $req->type;
		    $users->save();
            return redirect()->route('login.index');
		
		}
		else{
		    return redirect()->route('adminregistration.index');
		
		}
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Validator;

class RegistrationController extends Controller
{
    public function index(){

    	return view('registration.index');
    }
	public function verify(Request $req){
		$this->validate($req, [
    		'username' => 'required|unique:users',
    		'password' => 'required',
    		'phone' => 'required',
    		'address' => 'required'
    	]);
		
        $users = new Users;
		$users->username= $req->username;
		$users->password= $req->password;
		$users->phone= $req->phone;
		$users->address= $req->address;
		$users->type= $req->type;
		$users->save();
        return redirect()->route('login.index');
    }
}

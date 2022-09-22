<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class LoginController extends Controller
{
    public function index(){

    	return view('login.index');
    }
	
	public function verify(Request $req){
		
		
        $this->validate($req, [
    		'username' => 'required',
    		'password' => 'required',
    	]);
		
		
        $user = DB::table('users')->where('username', $req->username)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('uid', $user->id);
			$req->session()->put('uname', $user->username);
			$req->session()->put('type', $user->type);
    		return redirect()->route('home.index');
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect()->route('login.index');
    	}
    }
}

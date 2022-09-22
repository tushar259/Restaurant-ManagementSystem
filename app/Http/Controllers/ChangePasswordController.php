<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class ChangePasswordController extends Controller
{
    public function index(Request $req){
        
		$acc = Users::find(session('uid'));
		return view('changepassword.index')->with('account',$acc);
	}
	public function update(Request $req){

    	$account 			= Users::find($req->id);
		
		if($req->oldpassword==$account->password){
		    $account->password= $req->newpassword;
		    $account->save();
            return redirect()->route('profile.index');			
		}
		else{
		    return redirect()->route('changepassword.index');
		}
    	
    	
    }
}

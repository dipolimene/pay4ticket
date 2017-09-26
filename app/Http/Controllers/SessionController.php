<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateLoginDetails;

class SessionController extends Controller
{
    
	//
    public function __construct(){

    }

    //hits the login page which doubles as registration page
    public function show(){

    	return view('user.login');
    
    }

    public function store(ValidateLoginDetails $request){

    //attempt to login
    	if(! auth()->attempt(request(['email', 'password']))){

    		return redirect()->back();
    	}

    		
    		return redirect('/dashboard/'.Auth::user()->id);

    }

    public function logout(){

    	auth()->logout();

    	return redirect('/');
    }
}

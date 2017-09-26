<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRegistration;

class RegisterController extends Controller
{
    //
    public function __construct(){

    }

    //displays the registeration page which doubles as login page
    public function show(){

    	return view('user.register');

    }


    public function store(ValidateRegistration $request){

    	//insert user data into db
    	$user = User::create([
    				'name' => request('name'),
    				'email' => request('email'),
    				'password' => bcrypt(request('password'))
    			]);

    	//log user in
    	auth()->login($user);

    	//takes user to login page after succesfully registering
    	return redirect('/sellticket/login')->withMessage("Registration Successful");
    }
}

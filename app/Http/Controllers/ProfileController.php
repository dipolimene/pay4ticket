<?php

namespace App\Http\Controllers;


use Auth;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateProfile;


class ProfileController extends Controller
{
    //
    public function __construct(){

    	 $this->middleware('auth');

    }


    public function show(){

    	return view('user.dashboard');

    }

    public function store(ValidateProfile $request, $id){

    	//insert profile details into db
    	$profile = Profile::create([
    				'users_id' => $id,
    				'organizer' => request('organizer'),
    				'address' => request('address'),
    				'public_email' => request('public_email'),
    				'private_number' => request('private_number'),
    				'public_number' => request('public_number'),
    				'social_media' => request('social_media'),
    				'nuban' => request('nuban'),
    				'bank_name' => request('bank_name'),
    				'beneficiary' => request('beneficiary')
    			]);

    	//take user to dashboard
    	return redirect('/dashboard/'.Auth::user()->id)->withMessage('Saved');
    }
}

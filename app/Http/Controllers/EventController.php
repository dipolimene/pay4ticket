<?php

namespace App\Http\Controllers;

use Auth;
use App\Ticket;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateEventUpload;

class EventController extends Controller
{
    //
    public function __construct(){

    	 $this->middleware('auth');

    }


    public function show(){

    	return view('user.event');

    }

    public function store(ValidateEventUpload $request, $id){

    	//insert ticket details into db
    	$ticket = Ticket::create([
    				'organizer_id' => $id,
    				'title' => request('title'),
    				'description' => request('description'),
    				'genre' => request('genre'),
    				'date' => request('date'),
    				'time' => request('time'),
    				'price' => request('price'),
    				'premium' => request('premium'),
    				'identity' => request('identity'),
    				'location' => request('location'),
    				'address' => request('address'),
    				'flyer' => request('flyer')->store('flyers'),
    				'banner' => request('banner')->store('banners')
    			]);

    	//take user to dashboard
    	return redirect('/dashboard/event/'.Auth::user()->id)->withMessage('Posted Successfully, Please await a follow up call from us. Thank you.');
    }
}
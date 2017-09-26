<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //controller to view the index page
    public function show() {

    return view('view.index');

    }
}

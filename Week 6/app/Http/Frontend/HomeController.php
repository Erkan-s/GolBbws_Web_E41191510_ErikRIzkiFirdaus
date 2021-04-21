<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\controller\Frontend;

class HomeControlle extends Controller
{
    public function index(){
        return view('frontend.home');
    }
}

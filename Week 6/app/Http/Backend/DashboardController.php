<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dahsboard');
    }
}

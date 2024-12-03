<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //This is the dashboard controller to return the dashboard view
    public function dashboard(){

        return view('dashboard.dashboard');
    }
}

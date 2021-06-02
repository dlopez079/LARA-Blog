<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    // ---------------------------------------------
    // This is the index.
    // It will check the roles of the user
    // and forward them to he appropriate page. 
    // There are only 3 roles currently on application
    // ---------------------------------------------
    public function index()
    {
        if(Auth::user()->hasRole('user')) {
            return view('userdash');
        } elseif(Auth::user()->hasRole('blogwriter')) {
            return view('blogwriterdash');
        } elseif(Auth::user()->hasRole('admin')) {
            return view('admindash');
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }
}

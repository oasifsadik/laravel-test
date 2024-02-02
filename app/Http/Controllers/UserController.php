<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::user()->status == 'Pending')
        {
            return view('user.pendingUser');
        }
    }

    public function user()
    {
        if(Auth::user()->status == 'Approved')
        {
            return view('user.user');
        }
        else
        {
            return view('user.pendingUser');
        }
    }
}

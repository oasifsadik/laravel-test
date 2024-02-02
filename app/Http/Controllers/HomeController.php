<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin') {
            return redirect('/admin-dashboard');
        }
        elseif(Auth::user()->role == 'User' && Auth::user()->status == 'Approved')
        {
            return redirect('/user');
        }
        else{
            return redirect('/user');
        }
    }
}

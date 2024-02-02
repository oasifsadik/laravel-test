<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role','User')
                        ->where('status','Pending')
                        ->get();
        return view('admin.index',compact('users'));
    }

    public function approved($id)
    {
        $approved = User::find($id);
        $approved->status = 'Approved';
        $approved->save();
        return redirect()->back();
    }

    public function decline($id)
    {
        $decline = User::find($id);
        $decline->delete();
        return redirect()->back();
    }
}

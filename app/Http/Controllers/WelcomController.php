<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    //
    public function index(){
        $admin=User::all()->first();
        return view('welcome',compact('admin'));
    }
}

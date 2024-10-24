<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adds;
use App\Models\Breakingnews;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class WelcomController extends Controller
{
    //
    public function index(){
        $add = Adds::where('add_status', 1)->orderBy('add_id', 'desc')->take(1)->get();
        $breakingnews = Breakingnews::where('status', 1)->orderBy('breakingnews_id', 'desc')->take(3)->get();
        $news=News::all();
        $cat=Category::all();
        $admin=User::all()->first();
        return view('welcome',compact('admin','cat','add','breakingnews','news'));
    }

    //change lan
    public function changeLan(){
        if(Session::get('lang') == 'bangla'){
            Session::put('lang','english');
        }
        else{
            Session::put('lang','bangla');
        }
        return redirect()->back();
        
    }
}

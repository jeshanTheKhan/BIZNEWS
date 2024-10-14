<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //View File
    public function index(){
        $cat=Category::all();
        return view('Admin.News.index',compact('cat'));
    }
}

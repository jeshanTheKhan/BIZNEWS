<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //View File
    public function index(){
        $cat=Category::all();
        return view('Admin.News.index',compact('cat'));
    }
    // Save
    public function save(Request $req){
        $store=new News();
        $store->english_title=$req->eng_title;
        $store->bangla_title=$req->ban_title;

    }
}

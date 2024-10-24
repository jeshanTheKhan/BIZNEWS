<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Str;
use Image;


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
        $store->news_cat=$req->cat;
        $store->english_body=$req->englishbody;
        $store->bangla_body=$req->banglabody;
        $store->date=date('d-m-Y');
        $store->hero=$request->on_sale;
        $store->category=$request->best_rated;
        $store->feather=$request->flast_sale;
        $store->english_title_slug=Str::slug($req->eng_title);

        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        

        $store->bangla_title_slug=make_slug($req->ban_title);
        if ($req->file('main_thumbnail')) {
            $image = $req->file('main_thumbnail');
            $image_ext = chr(rand(65, 90)) . '-' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1200, 600)->save('storage/back/media/news/' . $image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        if ($store) {
            $notification = array(
                'message' => 'News Added Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }
    // Table
    public function table(){
        $result=News::all();
        return view('Admin.News.table',compact('result'));
    }
    // Load Edit
    public function edit($id){
        $cat=Category::all();
        $result=News::find($id);
        return view('Admin.News.edit',compact('result','cat'));
    }
    // Status Update
    public function NewsStatus(Request $request, $id)
    {
        // Find the breaking news by its id
        $result = News::find($id);

        // Update the status field from the request input
        $result->status = $request->input('status');
        $result->save();  // Save the changes

        // Redirect back or to any other page with a success message
        return redirect()->back()->with('status', 'Status updated successfully!');
    }
}

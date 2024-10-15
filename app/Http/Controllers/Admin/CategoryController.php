<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    //View File
    public function index(){
        return view('Admin.Category.index');
    }
    // Save Category
    public function save(Request $req){
        $store=new Category();
        $store->cat_name=$req->cat_name;
        $store->cat_slug=Str::slug($req->cat_name);
        $store->bangla_cat_name=$req->cat_name_bangla;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        

        $store->bangla_cat_slug=make_slug($req->cat_name_bangla);
        $store->save();
        
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Category Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    // Database
    public function table(){
        $cat=Category::all();
        return view('Admin.Category.table',compact('cat'));
    }
    // Edit
    public function edit($id){
        $cat=Category::find($id);
        return view('Admin.Category.edit',compact('cat'));
    }
    // Update
    public function update(Request $req)
    {
        $store=Category::find($req->c_id);
        $store->cat_name=$req->cat_name;
        $store->cat_slug=Str::slug($req->cat_name);
        $store->bangla_cat_name=$req->bangla_cat_name;

        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }

        $store->bangla_cat_slug=make_slug($req->bangla_cat_name);

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Category Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('all.category')->with($notification);

    }
    // Delete
    public function del($id){
        $category=Category::find($id);
        $category->delete();
        $notification = array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    // UpdateStatus
    public function updateCatStatus(Request $request, $id)
    {
        // Find the cat by its id
        $cat = Category::find($id);
        
        // Update the cat_status field
        $cat->cat_status = $request->input('cat_status');
        $cat->save();  // Save the changes

        // Redirect back or to any other page
        return redirect()->back()->with('status', 'Cat status updated successfully!');
    }
}

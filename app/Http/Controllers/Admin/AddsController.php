<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adds;
use Illuminate\Http\Request;
use Image;

class AddsController extends Controller
{
    //View File
    public function index(){
        return view('Admin.Adds.index');
    }
    // Save Details
    public function save(Request $req){
        $store=New Adds();
        $store->add_link=$req->link;

        if ($req->file('main_thumbnail')) {
            $image = $req->file('main_thumbnail');
            $image_ext = $req->link . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/add/' . $image_ext);
            $store->add_image = $image_ext;
        }
        $store->save();
        if ($store) {
            $notification = array(
                'message' => 'Adds Added Successfully',
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
        $result=Adds::all();
        return view('Admin.Adds.table',compact('result'));
    }
    // Status Update
    public function AddStatus(Request $request, $id)
    {
        // Find the breaking news by its id
        $result = Adds::find($id);

        // Update the status field from the request input
        $result->add_status = $request->input('status');
        $result->save();  // Save the changes

        // Redirect back or to any other page with a success message
        return redirect()->back()->with('status', 'Status updated successfully!');
    }
    // Edit
    public function edit($id){
        $result=Adds::find($id);
        return view('Admin.Adds.edit',compact('result'));
    }
    // Update
    public function update(Request $req)
    {
        $store=Adds::find($req->c_id);
        $store->add_link=$req->link;

        if ($req->file('main_thumbnail')) {
            $image = $req->file('main_thumbnail');
            $image_ext = $req->link . '.' . $image->getClientOriginalExtension();
        
            // Resize and save the image
            Image::make($image)->resize(300, 300)->save('storage/back/media/add/' . $image_ext);
        
            // Delete the old image if it exists
            if ($store->add_image && file_exists('storage/back/media/add/' . $store->add_image)) {
                unlink('storage/back/media/add/' . $store->add_image);
            }
        
            // Update the database record with the new image name
            $store->add_image = $image_ext;
            $store->save();
        }
        $store->save();
        if ($store) {
            $notification = array(
                'message' => 'Adds Update Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Failed To update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);  

    }
    // Delete
    public function del($id){
        $results=Adds::find($id);
        $results->delete();
        $notification = array(
            'message' => 'Adds Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}

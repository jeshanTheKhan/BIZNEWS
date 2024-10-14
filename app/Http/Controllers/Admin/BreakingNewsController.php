<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Breakingnews;
use Illuminate\Http\Request;
use Str;

class BreakingNewsController extends Controller
{
    //View File
    public function index()
    {
        return view('Admin.BreakingNews.index');
    }
    // Save News
    public function save(Request $req)
    {
        $store = new Breakingnews();
        $store->english_news = $req->english;
        $store->bangla_news = $req->bangla;
        $store->save();

        if ($store) {
            $notification = array(
                'message' => 'Breaking News Added Successfully',
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
    public function eng()
    {
        $result = Breakingnews::whereNotNull('english_news')->get();
        return view('Admin.BreakingNews.engtable', compact('result'));
    }
    public function bangla()
    {
        $result = Breakingnews::whereNotNull('bangla_news')->get();
        return view('Admin.BreakingNews.banglatable', compact('result'));
    }

    public function EnglishStatus(Request $request, $id)
    {
        // Find the breaking news by its id
        $result = Breakingnews::find($id);

        // Update the status field from the request input
        $result->status = $request->input('status');
        $result->save();  // Save the changes

        // Redirect back or to any other page with a success message
        return redirect()->back()->with('status', 'Status updated successfully!');
    }
    // Edit(English)
    public function edit($id){
        $results=Breakingnews::find($id);
        return view('Admin.BreakingNews.edit',compact('results'));
    }
    // Update(English)
    public function updateEng(Request $req)
    {
        $store=Breakingnews::find($req->c_id);
        $store->english_news = $req->english;
        $store->bangla_news = $req->bangla;
        $store->save();

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Breaking News Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('english.breakingnews')->with($notification);

    }
    // Delete(English)
    public function del($id){
        $results=Breakingnews::find($id);
        $results->delete();
        $notification = array(
            'message' => 'Breaking News Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    

}

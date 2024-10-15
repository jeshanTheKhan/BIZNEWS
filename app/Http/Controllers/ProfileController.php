<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $req)
    {
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
        $store = User::find(Auth::user()->id);
        $store->name = $req->name;
        $store->lastName = $req->lastName;
        $store->number = $req->phoneNumber;
        $store->state = $req->state;
        $store->zipCode = $req->zipCode;
        $store->address = $req->address;
        $store->twitter = $req->twitter;
        $store->facebook = $req->facebook;
        $store->linkedln = $req->linkdln;
        $store->instagram = $req->instagram;
        $store->youtube = $req->youtube;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Profile Upgrade Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Upgrade!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

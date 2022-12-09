<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->username = $request->username;
        $request->user()->firstname = $request->firstname;
        $request->user()->lastname = $request->lastname;
        $request->user()->email = $request->email;
        $request->user()->notelp = $request->notelp;
        $request->user()->company = $request->company;
        $request->user()->country = $request->country;
        $request->user()->city = $request->city;
        $request->user()->address = $request->address;
        $request->user()->npwp = $request->npwp;
        $request->user()->nib = $request->nib;

        if($request->photo) {
            File::delete(public_path('app/'.$request->user()->photo));
            $path = $request->photo->store('photo');
            $request->user()->photo = $path;
        }

        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();
        File::delete(public_path('app/'.$request->user()->photo));

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // $photo = $request->photo->store('photo');
        // return view('test.awok', ['photo' => $photo]);

        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'notelp' => ['required', 'string', 'max:15', 'unique:'.User::class],
            'company' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' =>  ['required', 'string', 'max:255'],
            'npwp' => ['required', 'max:20'],
            'nib' => ['required', 'integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => ['image'],
        ]);

        if($request->photo) {
            // $file_name = $request->photo->getClientOriginalName();
            // $path = $request->photo->storeAs('photo', 'photo_profile'.$file_name);
            $path = $request->photo->store('photo');
        }
        else {
            $path = 'photo/default.png';
        }

        $user = User::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'company' => $request->company,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'npwp' => $request->npwp,
            'nib' => $request->nib,
            'password' => Hash::make($request->password),
        ]);

        $user->photo = $path;
        $user->save();

        event(new Registered($user));

        Auth::login($user);
        
        // return redirect(RouteServiceProvider::HOME);
        return redirect('/register/mail/'.$user->id);
    }
}

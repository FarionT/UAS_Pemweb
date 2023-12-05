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

        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'emailcompany' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'notelp' => ['required', 'string', 'max:15', 'unique:'.User::class],
            'npwp' => ['required', 'max:20'],
            'nib' => ['required', 'integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => ['image'],
        ]);

        if($request->photo) {
            // date_default_timezone_set('Asia/Jakarta');
            // $date = date("Y-m-d h:i:sa");
            // $file_name = $request->photo->getClientOriginalName();
            // $full_file = 'photo_profile_'.$file_name.'_'.$date;
            // $request->photo->storeAs('photo', $full_file);
            // $path = 'photo/'.$full_file;
            // $path = $request->photo->store('photo');
            $path = Storage::disk('custom')->put('photo', $request->photo);
        }
        else {
            $path = 'photo/default.png';
        }

        $user = User::create([
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company' => $request->company,
            'email' => $request->email,
            'emailcompany' => $request->emailcompany,
            'notelp' => $request->notelp,
            'npwp' => $request->npwp,
            'nib' => $request->nib,
            'password' => Hash::make($request->password),
            'photo' => $path,
        ]);

        $user->photo = $path;
        $user->save();

        event(new Registered($user));

        Auth::login($user);
        
        // return redirect(RouteServiceProvider::HOME);
        return redirect('/register/mail/'.$user->id);
    }
}

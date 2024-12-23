<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\UserRegisterNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }

    public function registerPost(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'phone' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'avatar' => ['nullable', 'image', 'max:1024'],
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));

        if ($request->hasFile('avatar')) {
            $user->avatar = Storage::putFile('uploads/users/avatars', $request->file('avatar'));
        }

        $user->save();

        $user->notify(new UserRegisterNotification());

        // Mail::to('ilkinyusubov16@gmail.com')->send(new RegisterMail($request->name));

        return redirect()->route('app.login');
    }



    public function login()
    {

        return view('auth.login');
    }



    public function loginPost(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('app.profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function profile(){

        $user = Auth::user();

        return view('front.profile', compact('user'));
        
    }


    public function logout(){
        session()->flush();

        return redirect()->route('app.login');
        
    }
}

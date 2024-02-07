<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.auth.login');
//        dd('index');
    }

//    public function login()
//    {
//        return view('Admin.auth.login');
//    }

    public function authenticate(Request $request): RedirectResponse
    {
//        dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }
//        $user = \App\Models\User::query()->where([
//            'email' => $request->input('email'),
//            'password' => Hash::make($request->input('password'))  //bunu yazanda alttaki if($user) yazardig
//        ])->first();
//
//        if ($user && Hash::check($request->input('password'), $user->password)) {
//            $request->session()->regenerate();      //bunu yazmasam da olur
////            Auth::guard('admin')->loginUsingId($user->id);
//            return redirect()->intended('dashboard');
//        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function dashboard()
    {
        return view('Admin.pages.dashboard');
//        dd('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'You have been logged out successfully.');
    }

}

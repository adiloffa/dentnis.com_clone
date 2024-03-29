<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.auth.login');
    }


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

    public function show_message()
    {
        $messages=Contact::query()->get();
        return view('Admin.pages.contact-messages.contact_message', compact('messages'));
    }

    public function delete_message(string $id)
    {
        $message = Contact::find($id);
        if ($message) {
            $message->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        }
    }

}

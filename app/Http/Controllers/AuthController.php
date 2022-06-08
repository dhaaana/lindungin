<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // By Jess
    // UC01.01 dan 01.02
    public function display()
    {
        return view('halaman-register');
    }

    public function saveUserData(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|required_with:repeatPassword|same:repeatPassword',
            'repeatPassword' => 'required'
        ]);

        $user = new User();
        $user->fill(
            [
                $user->username = $validated['username'],
                $user->name = $validated['name'],
                $user->email = $validated['email'],
                $user->password = Hash::make($validated['password']),
            ]

        );
        $user->save();

        return redirect('/login');
    }

    public function validateLoginForm(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->back();
    }

    // public function authenticated(Request $request, $user)
    // {
    //     if ($user->hasRole('verifikator')) {
    //         return redirect()->route('verifikator.page');
    //     }

    //     return redirect('/');
    // }
}

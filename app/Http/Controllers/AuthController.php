<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        return view('halaman-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $user->fill([
            $user->username = $validated['username'],
            $user->name = $validated['name'],
            $user->email = $validated['email'],
            $user->password = Hash::make($validated['password']),
        ]

        );
        $user->save();

        return redirect('/masuk');
    }

    public function validateLoginForm(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        return redirect()->route('login');
    }



}

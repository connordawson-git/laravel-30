<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        //validate
        $validated = request()->validate([
           'email' => ['required', 'email'],
           'password'=> ['required']
        ]);
        //attempt to login
        if(!Auth::attempt($validated)){
            throw ValidationException::withMessages([
               'password' => 'Sorry those credentials do not match'
            ]);
        }
        //success regenerate token
        request()->session()->regenerate();
        //redirect
        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}

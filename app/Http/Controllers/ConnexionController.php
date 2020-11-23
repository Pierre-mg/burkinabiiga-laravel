<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function adminLogIn()
    {
        return view('admin/connect');
    }

    public function adminLogInForm(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/home');
            exit;
        }

        $error['error'] ="Email et / ou mot de passe invalide";

        return view('admin/connect', $error);
    }

    public function adminLogOut()
    {
        Auth::logout();

        return redirect()->intended('/');
        exit;
    }
}

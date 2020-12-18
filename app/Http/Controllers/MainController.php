<?php

namespace App\Http\Controllers;

use App\Models\Home;

class MainController extends Controller
{
    public function home()
    {
        $home['home'] = Home::all();

        return view('home', $home);
    }

    public function adminHome()
    {
       return view('admin/home');
    }

    public function adminHomeModify()
    {
        $home['home'] = Home::all();

        return view('admin/home-modify', $home);
    }
}

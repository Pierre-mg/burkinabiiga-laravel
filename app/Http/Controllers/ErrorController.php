<?php

namespace App\Http\Controllers;


class ErrorController extends Controller
{
    public static function error404()
    {
        return view('404');
    }

}

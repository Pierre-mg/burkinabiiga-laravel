<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class JoinUsController extends Controller
{
    public function joinUs()
    {
        return view('join-us');
    }

    // public function contact(Request $request)
    // {
    //     $validate = $this->validate($request, [
    //         'lastname' => 'required',
    //         'firstname' => 'required',
    //         'email' => 'required|email',
    //         'content' => 'required'
    //     ]);

    //     if ($validate) {
    //         Mail::to('pierrem.garcia@gmail.com')
    //         ->send($request);
    //         ->view('join-us');
    //     }

    // }
}

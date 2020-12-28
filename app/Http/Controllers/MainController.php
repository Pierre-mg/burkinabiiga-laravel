<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;


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

    public function adminHomeSection($id)
    {
        $home['home'] = Home::find($id);

        return view('admin/home-section', $home);
    }

    public function adminHomeSectionEdit(Request $request, $id)
    {
        $home = Home::find($id);

        $home->content = $request->input('content');

        $success = $home->save();

        if (!$success) {
            return redirect()->route('adminHomeSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminHomeModify');
        exit;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Homefooter;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        $home['home'] = Home::all();
        $home['homefooter'] = Homefooter::all();

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

    //Homefooter

    public function adminHomefooterModify()
    {
        $homefooter['homefooter'] = Homefooter::all();

        return view('admin/homefooter-modify', $homefooter);
    }

    public function adminHomefooterSection($id)
    {
        $homefooter['homefooter'] = Homefooter::find($id);

        return view('admin/homefooter-section', $homefooter);
    }

    public function adminHomefooterSectionEdit(Request $request, $id)
    {
        $homefooter = Homefooter::find($id);

        $homefooter->title = $request->input('title');
        $homefooter->content = $request->input('content');

        $success = $homefooter->save();

        if (!$success) {
            return redirect()->route('adminHomefooterSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminHomefooterModify');
        exit;
    }
}

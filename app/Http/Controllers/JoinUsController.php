<?php

namespace App\Http\Controllers;

use App\Models\Join;
use Illuminate\Http\Request;


class JoinUsController extends Controller
{
    public function joinUs()
    {
        return view('join-us');
    }

    public function adminJoinUs()
    {
        $joinUs['joinUs'] = Join::all();

        return view('admin/joinUs', $joinUs);
    }

    public function adminJoinUsSection($id)
    {
         $joinUs['joinUs'] = Join::find($id);

         return view('admin/joinUs-section', $joinUs);
    }

    public function adminJoinUsSectionEdit(Request $request, $id)
    {
        $joinUs = Join::find($id);

        $joinUs->title = $request->input('title');
        $joinUs->content = $request->input('content');

        $success = $joinUs->save();

        if (!$success) {
            return redirect()->route('adminJoinUsSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminJoinUs');
        exit;
    }


}

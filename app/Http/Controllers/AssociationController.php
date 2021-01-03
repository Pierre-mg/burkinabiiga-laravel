<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use App\Models\Associationteam;


class AssociationController extends Controller
{
    public function association()
    {
        $association['association'] = Association::all();
        $association['associationteam'] = Associationteam::all();

        return view('association', $association);
    }

    public function adminAssociation()
    {
        $association['association'] = Association::all();

        return view('admin/association', $association);
    }

    public function adminAssociationSection($id)
    {
         $association['association'] = Association::find($id);

         return view('admin/association-section', $association);
    }

    public function adminAssociationSectionEdit(Request $request, $id)
    {
        $association = Association::find($id);

        $association->title = $request->input('title');
        $association->content = $request->input('content');

        $success = $association->save();

        if (!$success) {
            return redirect()->route('adminAssociationSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminAssociation');
        exit;
    }

    //Association team

    public function adminAssociationteam()
    {
        $associationteam['associationteam'] = Associationteam::all();

        return view('admin/associationteam', $associationteam);
    }

    public function adminAssociationteamSection($id)
    {
         $associationteam['associationteam'] = Associationteam::find($id);

         return view('admin/associationteam-section', $associationteam);
    }

    public function adminAssociationteamSectionEdit(Request $request, $id)
    {
        $associationteam = Associationteam::find($id);

        $associationteam->name = $request->input('name');
        $associationteam->content = $request->input('content');
        $associationteam->tel = $request->input('tel');
        $associationteam->email = $request->input('email');

        $success = $associationteam->save();

        if (!$success) {
            return redirect()->route('adminAssociationteamSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminAssociationteam');
        exit;
    }

}

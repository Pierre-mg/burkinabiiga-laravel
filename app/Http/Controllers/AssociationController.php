<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;


class AssociationController extends Controller
{
    public function association()
    {
        $association['association'] = Association::all();

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


}

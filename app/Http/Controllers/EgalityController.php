<?php

namespace App\Http\Controllers;

use App\Models\Egality;
use Illuminate\Http\Request;



class EgalityController extends Controller
{
    public function egality()
    {
        $egality['egality'] = Egality::all();

        return view('egality', $egality);
    }

    public function adminEgality()
    {
        $egality['egality'] = Egality::all();

        return view('admin/egality', $egality);
    }

    public function adminEgalitySection($id)
    {
        $egality['egality'] = Egality::find($id);

        return view('admin/egality-section', $egality);
    }

    public function adminEgalitySectionEdit(Request $request, $id)
    {
        $egality = Egality::find($id);

        $egality->title = $request->input('title');
        $egality->content = $request->input('content');

        $success = $egality->save();

        if (!$success) {
            return redirect()->route('adminEgalitySection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminEgality');
        exit;
    }
}

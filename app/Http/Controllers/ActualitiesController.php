<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;


class ActualitiesController extends Controller
{
    public function actualities()
    {
       $actualities['actualities'] = Actuality::orderBy('date', 'desc')->get();

       return view('actualities', $actualities);
    }

    public function adminActualities()
    {
        $actualities['actualities'] = Actuality::orderBy('date', 'desc')->get();

        return view('admin/actualities', $actualities);
    }

    public function adminActualitiesCreate()
    {
        return view('admin/actualities-create');
    }

    public function adminActualitiesadd(Request $request)
    {
        $actuality = new Actuality;

        $actuality->date = $request->date;
        $actuality->place = $request->place;
        $actuality->content = $request->content;

        $success = $actuality->save();

        if (!$success) {
            return redirect()->route('adminActualitiesCreate');
            exit;
         }

        return redirect()->route('adminActualities');
        exit;
    }

    public function adminActualitiesSection($id)
    {
         $actualities['actualities'] = Actuality::find($id);

         return view('admin/actualities-section', $actualities);
    }

    public function adminActualitiesSectionEdit(Request $request, $id)
    {
        $actualities = Actuality::find($id);

        $actualities->date = $request->input('date');
        $actualities->place = $request->input('place');
        $actualities->content = $request->input('content');

        $success = $actualities->save();

        if (!$success) {
            return redirect()->route('adminActualitiesSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminActualities');
        exit;
    }

    public function adminActualitiesDelete($id)
    {
        $actuality = Actuality::find($id);

        $actuality->delete();

        return redirect()->route('adminActualities');
        exit;
    }
}

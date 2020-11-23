<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;


class ActionsController extends Controller
{
    public function actions()
    {
        $actions['actions'] = Action::all();

        return view('actions', $actions);
    }

    public function adminActions()
    {
        $actions['actions'] = Action::all();

        return view('admin/actions', $actions);
    }

    public function adminActionsSection($id)
    {
        $actions['actions'] = Action::find($id);

        return view('admin/actions-section', $actions);
    }

    public function adminActionsSectionEdit(Request $request, $id)
    {
        $actions = Action::find($id);

        $actions->title = $request->input('title');
        $actions->content = $request->input('content');

        $success = $actions->save();

        if (!$success) {
            return redirect()->route('adminActionsSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminActions');
        exit;
    }
}

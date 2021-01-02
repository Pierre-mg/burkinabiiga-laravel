<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;


class DonationController extends Controller
{
    public function donation()
    {
        $donation['donation'] = Donation::all();

        return view('donation', $donation);
    }

    public function adminDonation()
    {
        $donation['donation'] = Donation::all();

        return view('admin/donation', $donation);
    }

    public function adminDonationSection($id)
    {
         $donation['donation'] = Donation::find($id);

         return view('admin/donation-section', $donation);
    }

    public function adminDonationSectionEdit(Request $request, $id)
    {
        $donation = Donation::find($id);

        $donation->title = $request->input('title');
        $donation->content = $request->input('content');

        $success = $donation->save();

        if (!$success) {
            return redirect()->route('adminDonationSection', ['id' => $id]);
            exit;
         }

        return redirect()->route('adminDonation');
        exit;
    }


}

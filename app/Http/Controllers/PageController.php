<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function privacy() {
        return view('frontend.privacy');
    }

    public function terms() {
        return view('frontend.terms');
    }

    public function refund() {
        return view('frontend.refund');
    }

    public function contact_leads(Request $request) {
        Enquiry::submitLeads( $request->merge([
            'redirected_from' => request()->headers->get('referer')
        ]));

        return response()->json([
            'status' => 200,
            'message' => 'Success'
        ]);
    }
}

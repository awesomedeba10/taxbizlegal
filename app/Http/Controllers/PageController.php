<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        readCsv();
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
}

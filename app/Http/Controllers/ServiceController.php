<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function itr() {
        return view('frontend.services.itr');
    }

    public function pvt() {
        return view('frontend.services.pvt-company');
    }
}

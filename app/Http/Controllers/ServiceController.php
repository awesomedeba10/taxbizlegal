<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function reroute($slug) {
        // dd('frontend.services.' . $slug);
        if (!view()->exists('frontend.services.' . $slug)) {
            abort(404);
        }

        return view('frontend.service', ['slug' => $slug]);
    }
}

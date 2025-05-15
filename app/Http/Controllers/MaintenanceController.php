<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function up() {
        if (config('app.maintenance.mode') == false):
            return redirect()->route('front.home');
        endif;

        return view('frontend.extras.maintenance');
    }

    public function access(Request $request) {
        if ($request->input('accessCode') === config('app.maintenance.access_code')) {
            $request->session()->put('has_maintenance_access', true);

            return redirect('/');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class AdminUtilController extends Controller
{
    public function sitemap() {
        $xmlPath = public_path('sitemap.xml');
        $xmlString = file_get_contents($xmlPath);

        return view('admin.utils.sitemap', [
            'sitemap' => format_xml($xmlString, true)
        ]);
    }

    public function generate_sitemap() {
        Artisan::call('app:generate-sitemap');
        return redirect()->route('admin.sitemap.index')->with('success', 'Sitemap Refreshed Successfully');
    }
}

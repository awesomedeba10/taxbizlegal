<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    public function index() {
        $enquiries = Enquiry::paginate(10);

        return view('admin.enquiry.index', [
            'enquiries' => $enquiries
        ]);
    }
}

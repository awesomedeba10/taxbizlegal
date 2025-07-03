<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AsyncFileUploadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('banner_img');

            $filename = uniqid().'_'.time().'.'.$file->getClientOriginalExtension();
            $path = $file->storeAs('tmp', $filename);

            return response($path, 200);
        }

        if ($request->isMethod('delete')) {
            $path = $request->getContent();

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }

            return response('', 200);
        }

        return response()->json(['message' => 'Method Not Allowed'], 405);
    }
}

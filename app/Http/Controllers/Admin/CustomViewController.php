<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomView;

class CustomViewController extends Controller
{
    public function saveView(Request $request)
    {
        $customView = CustomView::create([
            'user_id' => Auth::id(),
            'url' => $request->headers->get('referer'),
            'name' => $request->input('name') ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Custom view saved successfully',
            'data' => $customView
        ]);
    }
}

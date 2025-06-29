<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomView;
use Illuminate\Support\Facades\Cache;

class CustomViewController extends Controller
{
    public function saveView(Request $request)
    {
        $customView = CustomView::create([
            'user_id' => Auth::id(),
            'url' => $request->headers->get('referer'),
            'name' => $request->input('name') ?? null,
        ]);

        Cache::forget("custom_views_user_" . Auth::id());

        return response()->json([
            'success' => true,
            'message' => 'Custom view saved successfully',
            'url' => $customView->url,
            'name' => $customView->name
        ]);
    }

    public function getViews()
    {
        $userId = Auth::id();
        return Cache::rememberForever("custom_views_user_" . Auth::id(), function () use ($userId) {
            return CustomView::where('user_id', $userId)
                ->orderBy('created_at')
                ->get();
        });
    }
}

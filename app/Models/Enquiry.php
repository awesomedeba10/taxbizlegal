<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
        'redirected_from',
    ];

    public static function submitLeads($request)
    {
        return self::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'redirected_from' => $request->redirected_from ?? null
        ]);
    }

    public static function getLatestLeads(int $minutes = 60) {
        return self::where('created_at', '>=', Carbon::now()->subMinutes($minutes))->get();
    }
}

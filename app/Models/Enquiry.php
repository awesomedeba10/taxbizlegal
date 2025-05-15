<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'redirected_from',
    ];

    public static function submitLeads($request)
    {
        return self::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'redirected_from' => $request->redirected_from ?? null
        ]);
    }
}

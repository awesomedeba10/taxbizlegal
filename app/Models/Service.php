<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'main_header', 'sub_header', 'background', 'name', 
        'description', 'sort_order' , 'is_active'
    ];

    public static function getServices() {
        return self::where('is_active', 1)
                ->orderBy('sort_order')
                ->get()
                ->groupBy(['main_header', 'sub_header']);
    }
}

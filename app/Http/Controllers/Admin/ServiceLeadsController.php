<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ServiceLeadsController extends Controller
{
    public function index() {
        $orders = Order::get();

        // dd($orders);
        return view('admin.leads.index', [
            'orders' => $orders
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Order;

class ServiceLeadsController extends Controller
{
    public function index()
    {
        $orders = Order::where('current_stage', '!=', 'payment_received')->orderBy('created_at', 'desc')->paginate(10);

        // dd($orders);
        return view('admin.leads.index', [
            'orders' => $orders
        ]);
    }

    public function paid_index()
    {
        $orders = Order::where('current_stage', 'payment_received')->paginate();

        // dd($orders);
        return view('admin.leads.index', [
            'orders' => $orders
        ]);
    }

    public function export()
    {
        $fileName = 'service_leads' . now()->format('Ymd_His') . '.csv';

        $orders = Order::get();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['Order Id', 'Cus Name', 'Email', 'Phone', 'State', 'Service Name' , 'Plan Selected' , 'Plan Price' , 'Current Stage'];

        $callback = function () use ($orders, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($orders as $order) {
                fputcsv($file, [
                    $order->order_id,
                    $order->cus_name,
                    $order->cus_email,
                    $order->cus_phone,
                    $order->cus_state,
                    $order->service_name,
                    $order->service_plan_name,
                    $order->service_price,
                    $order->current_stage
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}

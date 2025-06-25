<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;
use App\Models\Service;

class ServiceLeadsController extends Controller
{
    protected $services;

    public function __construct()
    {
        $this->services = Cache::remember('all_services_for_filter', now()->addHours(12), function () {
            return Service::select('slug', 'name')->orderBy('sort_order')->get();
        });
    }

    public function index(Request $request)
    {
        $orders = Order::with(['service:id,slug,name'])
            ->where('current_stage', '!=', 'payment_received')
            ->when($request->filled('services'), function ($query) use ($request) {
                $query->whereIn('service_name', $request->input('services'));
            })
            ->when($request->filled('current_status'), function ($query) use ($request) {
                $query->whereIn('current_stage', $request->input('current_status'));
            })
            ->when($request->filled('from_date'), function ($query) use ($request) {
                $query->whereDate('created_at', '>=', $request->input('from_date'));
            })
            ->when($request->filled('to_date'), function ($query) use ($request) {
                $query->whereDate('created_at', '<=', $request->input('to_date'));
            })
            ->when(!$request->filled('from_date') && !$request->filled('to_date'), function ($query) {
                $query->whereBetween('created_at', [
                    Carbon::now()->subDays(30)->startOfDay(),
                    Carbon::now()->endOfDay()
                ]);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10)->appends(['payload' => request('payload')]);

        return view('admin.leads.index', [
            'orders' => $orders,
            'services' => $this->services
        ]);
    }

    public function paid_index()
    {
        $orders = Order::with(['service:id,slug,name'])
            ->where('current_stage', 'payment_received')
            ->orderBy('created_at', 'desc')
            ->paginate(10)->appends(['payload' => request('payload')]);

        return view('admin.leads.index', [
            'orders' => $orders,
            'services' => $this->services
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

        $columns = ['Order Id', 'Cus Name', 'Email', 'Phone', 'State', 'Service Name', 'Plan Selected', 'Plan Price', 'Current Stage'];

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

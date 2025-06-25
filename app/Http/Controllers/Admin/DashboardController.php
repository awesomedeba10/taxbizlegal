<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.dashboard');
    }

    public function filter(Request $request)
    {
        return response()->json(['param' => custom_encrypt($request->input())]);
    }

    public function revenue_chart(Request $request)
    {
        // $data = Cache::remember('revenue_chart_30days', now()->addHours(4), function () {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')):
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        elseif ($request->filled('date_range')):
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        endif;

        $orders = Order::selectRaw("DATE(created_at) as date, SUM(service_price) as total")
            ->where('current_stage', 'payment_received')
            ->whereBetween('created_at', [$startDate, $now])
            ->groupByRaw("DATE(created_at)")
            ->orderByRaw("DATE(created_at)")
            ->get()
            ->keyBy('date');

        $days = $startDate->diffInDays($now) + 1;
        $graph = [];

        for ($i = 0; $i < $days; $i++) {
            $date = $startDate->copy()->addDays($i)->format('Y-m-d');
            $graph[] = (float) ($orders[$date]->total ?? 0);
        }

        return response()->json([
            'graph' => $graph,
            'total' => array_sum($graph),
            'percentage' => $this->calc_percentageChange($graph),
        ]);
    }

    public function clients_chart(Request $request)
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        } elseif ($request->filled('date_range')) {
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        }

        $clients = Order::selectRaw("DATE(created_at) as date, COUNT(DISTINCT cus_name) as total")
            ->whereBetween('created_at', [$startDate, $now])
            ->groupByRaw("DATE(created_at)")
            ->orderByRaw("DATE(created_at)")
            ->get()
            ->keyBy('date');

        $days = $startDate->diffInDays($now) + 1;
        $graph = [];

        for ($i = 0; $i < $days; $i++) {
            $date = $startDate->copy()->addDays($i)->format('Y-m-d');
            $graph[] = (int) ($clients[$date]->total ?? 0);
        }

        return response()->json([
            'graph' => $graph,
            'total' => array_sum($graph),
            'percentage' => $this->calc_percentageChange($graph),
        ]);
    }

    public function leads_chart(Request $request)
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        } elseif ($request->filled('date_range')) {
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        }

        $leads = Order::selectRaw("DATE(created_at) as date, COUNT(*) as total")
            ->whereBetween('created_at', [$startDate, $now])
            ->groupByRaw("DATE(created_at)")
            ->orderByRaw("DATE(created_at)")
            ->get()
            ->keyBy('date');

        $days = $startDate->diffInDays($now) + 1;
        $graph = [];

        for ($i = 0; $i < $days; $i++) {
            $date = $startDate->copy()->addDays($i)->format('Y-m-d');
            $graph[] = (int) ($leads[$date]->total ?? 0);
        }

        return response()->json([
            'graph' => $graph,
            'total' => array_sum($graph),
            'percentage' => $this->calc_percentageChange($graph),
        ]);
    }

    public function conversion_chart(Request $request)
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        } elseif ($request->filled('date_range')) {
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        }

        $leads = Order::selectRaw("DATE(created_at) as date, COUNT(*) as total")
            ->whereBetween('created_at', [$startDate, $now])
            ->groupByRaw("DATE(created_at)")
            ->orderByRaw("DATE(created_at)")
            ->get()
            ->keyBy('date');

        $conversions = Order::selectRaw("DATE(created_at) as date, COUNT(*) as total")
            ->where('current_stage', 'payment_received')
            ->whereBetween('created_at', [$startDate, $now])
            ->groupByRaw("DATE(created_at)")
            ->orderByRaw("DATE(created_at)")
            ->get()
            ->keyBy('date');

        $days = $startDate->diffInDays($now) + 1;
        $graph = [];

        for ($i = 0; $i < $days; $i++) {
            $date = $startDate->copy()->addDays($i)->format('Y-m-d');
            $totalLeads = (int) ($leads[$date]->total ?? 0);
            $convertedLeads = (int) ($conversions[$date]->total ?? 0);
            $percentage = $totalLeads > 0 ? round(($convertedLeads / $totalLeads) * 100, 2) : 0;
            $graph[] = $percentage;
        }

        return response()->json([
            'graph' => $graph,
            'total' => count($graph) ? round(array_sum($graph) / count($graph), 2) : 0, // average % across range
            'percentage' => $this->calc_percentageChange($graph),
        ]);
    }

    public function leads_status_chart(Request $request)
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        } elseif ($request->filled('date_range')) {
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        }

        $rawCounts = Order::selectRaw('current_stage, COUNT(*) as total')
            ->whereBetween('created_at', [$startDate, $now])
            ->groupBy('current_stage')
            ->pluck('total', 'current_stage');

        $statuses = [
            'basic_details_submitted',
            'payment_pending',
            'payment_initiated',
            'payment_received'
        ];

        $data = collect($statuses)->mapWithKeys(function ($status) use ($rawCounts) {
            return [$status => $rawCounts[$status] ?? 0];
        })->toArray();

        $total = array_sum($data);
        $percentages = [];

        foreach ($data as $key => $count) {
            $percentages[$key] = $total > 0 ? round(($count / $total) * 100, 2) : 0;
        }

        return response()->json([
            'total' => $total,
            'data' => $data,
            'percentages' => $percentages,
        ]);
    }

    public function leads_by_services(Request $request)
    {
        $now = Carbon::now();
        $startDate = $now->copy()->subDays(30)->startOfDay();

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $startDate = Carbon::parse($request->input('from_date'))->startOfDay();
            $now = Carbon::parse($request->input('to_date'))->endOfDay();
        } elseif ($request->filled('date_range')) {
            $startDate = $now->copy()->subDays(intval($request->input('date_range')) - 1)->startOfDay();
        }

        $services = Order::select('service_name', DB::raw('SUM(service_price) as total'))
            ->whereBetween('created_at', [$startDate, $now])
            ->where('current_stage', 'payment_received')
            ->groupBy('service_name')
            ->orderByDesc('total')
            ->limit(4)
            ->get();

        return response()->json([
            'labels' => $services->pluck('service_name'),
            'data' => $services->pluck('total'),
            'total' => $services->sum('total'),
        ]);
    }

    private function calc_percentageChange(array $arr): float
    {
        $todayRevenue = end($arr);
        $pastDays = array_slice($arr, 0, count($arr) - 1);
        $averagePast = count($pastDays) ? array_sum($pastDays) / count($pastDays) : 0;

        return $averagePast > 0
            ? round((($todayRevenue - $averagePast) / $averagePast) * 100, 2)
            : 0;
    }
}

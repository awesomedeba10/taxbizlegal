<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        return view('admin.dashboard');
    }

    public function revenue_chart()
    {
        // $data = Cache::remember('revenue_chart_30days', now()->addHours(4), function () {
            $now = Carbon::now();
            $startDate = $now->copy()->subDays(30)->startOfDay();

            $orders = Order::selectRaw("DATE(created_at) as date, SUM(service_price) as total")
                ->where('current_stage', 'payment_received')
                ->whereBetween('created_at', [$startDate, $now])
                ->groupByRaw("DATE(created_at)")
                ->orderByRaw("DATE(created_at)")
                ->get()
                ->keyBy('date');

            $revenues = [];
            for ($i = 0; $i < 30; $i++) {
                $date = $startDate->copy()->addDays($i)->format('Y-m-d');
                $revenues[] = (float) ($orders[$date]->total ?? 0);
            }

        //     return $revenues;
        // });

        $data = $revenues;

        $todayRevenue = $data[6]; // last element = today
        $avgPast6 = array_slice($data, 0, 6);
        $dailyAvg = count($avgPast6) ? array_sum($avgPast6) / count($avgPast6) : 0;

        $percentageChange = $dailyAvg > 0 ? round((($todayRevenue / $dailyAvg) * 100) - 100, 2) : 0;

        return response()->json([
            'data' => $data,
            'today' => $todayRevenue,
            'percentage' => $percentageChange,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'cus_name',
        'cus_email',
        'cus_phone',
        'cus_state',
        'service_name',
        'service_plan_name',
        'service_price',
        'current_stage',
        'rzp_order_id',
        'rzp_order_created_at',
        'rzp_payment_id',
        'rzp_paid_amt',
        'rzp_payment_status',
        'rzp_payment_created_at'
    ];

    public static function submitBasicDetails($request)
    {
        return self::create([
            'cus_name' => $request->name,
            'cus_email' => $request->email,
            'cus_phone' => $request->phone,
            'cus_state' => $request->state,
            'service_name' => $request->service_name,
            'order_id' => 'tbl-'. Str::random(11)
        ]);
    }

    public static function updatePlanDetails($request) {
        $order = self::where('order_id', base64_decode($request->order_id))->first();

        if (!$order):
            return null;
        endif;

        $order->service_plan_name = $request->plan_name ?? $order->service_plan_name;
        $order->service_price = $request->price ?? $order->service_price;
        $order->current_stage = 'payment_pending';
        $order->save();

        return $order;
    }

    public static function updateOrderStatus(string $orderId , $response) {
        $order = self::where('order_id', $orderId)->first();

        if (!$order):
            return null;
        endif;

        $order->rzp_order_id = $response['id'] ?? null;
        $order->rzp_order_created_at = date('Y-m-d H:i:s', $response['created_at']);
        $order->current_stage = 'payment_initiated';
        $order->save();

        return $order;
    }

    public static function updatePaymentStatus(string $orderId , $response)
    {
        $order = self::where('rzp_order_id', $orderId)->first();

        if (!$order):
            return null;
        endif;

        $order->rzp_payment_id = $response->id;
        $order->rzp_paid_amt = $response->amount/100;
        $order->rzp_payment_status = $response->status;
        $order->rzp_payment_created_at = date('Y-m-d H:i:s', $response->created_at);
        $order->current_stage = 'payment_received';

        $order->save();

        return $order;
    }

    public static function getLatestLeads(int $minutes = 60) {
        return self::where('created_at', '>=', Carbon::now()->subMinutes($minutes))->get();
    }
}

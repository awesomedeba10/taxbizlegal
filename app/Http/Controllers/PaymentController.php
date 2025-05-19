<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendPaymentEmail;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        if (!$request->query('orderid')):
            abort(404);
        endif;

        $order = Order::where('order_id', base64_decode($request->query('orderid')))->first();
        if (!$order):
            abort(404, 'Invalid or expired checkout link.');
        endif;
        if ($order->rzp_payment_status == 'captured'):
            return redirect()->route('front.payment.success', [
                'orderid' => base64_encode($order->order_id)
            ]);
        endif;

        return view('frontend.orders.checkout',[
            'order' => $order,
            'gst' => round($order->service_price*0.18),
            'subtotal' => round($order->service_price*0.18) + $order->service_price
        ]);
    }

    public function create(Request $request) {
        $api = new Api(config('services.razorpay.key_id'), config('services.razorpay.key_secret'));

        parse_str(parse_url($request->headers->get('referer'), PHP_URL_QUERY) ?? '', $params);
        $orderId = base64_decode($params['orderid']) ?? null;
        if (!$orderId):
            abort(403);
        endif;

        $order = Order::where('order_id', $orderId)->first();
        if (!$order):
            abort(403);
        endif;

        $pmt_amount = round($order->service_price*0.18) + $order->service_price;

        if (!$order->rzp_order_id):
            $orderData = [
                'amount'          => $pmt_amount*100,
                'currency'        => 'INR',
                'receipt'         => $orderId,
                'notes' => [
                    'service_name'  => $order->service_name,
                    'service_plan'  => $order->service_plan_name,
                    'current_stage' => $order->current_stage
                ]
            ];

            $rzp_order = $api->order->create($orderData);
            $order = Order::updateOrderStatus($orderId, $rzp_order);
        endif;

        return response()->json(array_merge($order->toArray(), [
            'amount'     => $pmt_amount*100,
            'description' => 'Order #' . $orderId . '. Service Plan : ' . $order->service_plan_name,
            'currency'  => 'INR',
            'key'       => config('services.razorpay.key_id'),
            'company_name' => config('app.site_info.company_name'),
            'logo' => asset('images/svg/tbl_logo.svg')
        ]));
    }

    public function verify(Request $request)
    {
        $api = new Api(config('services.razorpay.key_id'), config('services.razorpay.key_secret'));

        try {
            $attributes = [
                'razorpay_order_id' => $request->input('razorpay_order_id'),
                'razorpay_payment_id' => $request->input('razorpay_payment_id'),
                'razorpay_signature' => $request->input('razorpay_signature'),
            ];
            $api->utility->verifyPaymentSignature($attributes);
            $payment = $api->payment->fetch($request->input('razorpay_payment_id'));

            $order = Order::updatePaymentStatus($attributes['razorpay_order_id'], $payment);
            SendPaymentEmail::dispatch($order);

            return response()->json([
                'success' => true,
                'redirect_url' => route('front.payment.success', [
                    'orderid' => base64_encode($order->order_id)
                ])
            ]);
        } catch (\Exception $e) {
            Log::error('Payment verification failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Payment verification failed.']);
        }
    }

    public function success(Request $request) {
        if (!$request->query('orderid')):
            return redirect()->route('front.home');
        endif;

        $order = Order::where('order_id', base64_decode($request->query('orderid')))
            ->where('rzp_payment_status', 'Captured')
            ->first();

        if (!$order):
            return redirect()->route('front.home');
        endif;

        return view('frontend.orders.success', [
            'order' => $order
        ]);
    }

    // public function handle(Request $request)
    // {
    //     $input = $request->all();



    //     $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));



    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);



    //     if (count($input)  && !empty($input['razorpay_payment_id'])) {

    //         try {

    //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
    //         } catch (Exception $e) {

    //             return  $e->getMessage();

    //             Session::put('error', $e->getMessage());

    //             return redirect()->back();
    //         }
    //     }



    //     Session::put('success', 'Payment successful');

    //     return redirect()->back();
    // }

    // public function verify(Request $request)
    // {
    //     $input = $request->all();
    //     $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);

    //     if (count($input)  && !empty($input['razorpay_payment_id'])) {
    //         try {
    //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
    //         } catch (\Exception $e) {
    //             return  $e->getMessage();
    //             Session::put('error', $e->getMessage());
    //             return redirect()->back();
    //         }
    //     }

    //     Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
    //     return redirect()->back();
    // }
}

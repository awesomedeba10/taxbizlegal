<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function show()
    {
        return view('frontend.orders.checkout');
    }

    public function handle(Request $request)
    {
        $input = $request->all();

  

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

  

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

  

        if(count($input)  && !empty($input['razorpay_payment_id'])) {

            try {

                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

  

            } catch (Exception $e) {

                return  $e->getMessage();

                Session::put('error',$e->getMessage());

                return redirect()->back();

            }

        }

          

        Session::put('success', 'Payment successful');

        return redirect()->back();
    }

    public function verify(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
            } catch (\Exception $e) {
                return  $e->getMessage();
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}

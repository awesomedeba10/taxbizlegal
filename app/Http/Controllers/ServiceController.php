<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ServiceComponents;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    use ServiceComponents;

    public function reroute($slug) {
        if (!view()->exists('frontend.services.' . $slug)) {
            abort(404);
        }

        if($redirect = $this->tempRedirect($slug, 'front.contact')):
            return $redirect;
        endif;

        $this->init($slug);

        return view('frontend.service', ['slug' => $slug]);
    }

    public function leads(Request $request, $part, $slug) {
        $slug = base64_decode($slug);
        $part = base64_decode($part);
        if (!view()->exists('frontend.services.' . $slug)) {
            abort(403);
        }

        if($part == 'first'):
            $order = Order::submitBasicDetails(
                $request->merge([
                    'service_name' => $slug
                ])
            );

            return response()->json([
                'message' => 'Proceed to Checkout',
                'part' => 'second',
                'url' => route('front.services.get-leads', [
                    'part' => base64_encode('second'),
                    'slug' => base64_encode($slug),
                    'order_id' => base64_encode($order->order_id)
                ])
            ], 200);
        elseif($part == 'second'):
            $selected_plan = $request->input('selected_plan', 1);
            $plans = $this->get_utils(
                'service_plans' , $slug
            );

            $plan = array_values(array_filter($plans, fn($plan) => $plan['uuid'] === $selected_plan))[0] ?? [];
            if ($plan === null || empty($plan)) {
                abort(403);
            }

            $order = Order::updatePlanDetails(
                $request->merge([
                    'plan_name' => $plan['plan_name'],
                    'price' => $plan['price']
                ])
            );

            return response()->json([
                'message' => 'Ready to Redirect',
                'url' => route('front.payment.show', [
                    'orderid' => base64_encode($order->order_id)
                ])
            ], 200);
        endif;

        abort(403);
    }

    private function tempRedirect($slug, $destinationRoute, $message = 'This service is temporarily unavailable. Please contact us for assistance.') {
        $redirectSlugs = [
            'private-limited-company',
            'limited-liability-partnership',
            'one-person-company',
            'partnership-firm',
            'sole-proprietorship',
            'section-8-company',
            'nidhi-company',
            'public-limited-company'
        ];


        if (in_array($slug, $redirectSlugs)):
            return redirect()
                ->route($destinationRoute)
                ->with('message', $message)
                ->setStatusCode(302);
        endif;

        return null;
    }
}

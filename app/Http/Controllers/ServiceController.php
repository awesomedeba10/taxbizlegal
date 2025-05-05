<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ServiceComponents;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    use ServiceComponents;

    public function reroute($slug) {
        if (!view()->exists('frontend.services.' . $slug)) {
            abort(404);
        }

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
            return response()->json([
                'message' => 'Proceed to Checkout',
                'part' => 'second',
                'url' => route('front.services.get-leads', [
                    'part' => base64_encode('second'),
                    'slug' => base64_encode($slug)
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

            return response()->json([
                'message' => 'Ready to Redirect',
                'url' => route('front.payment.show', [
                    'price' => $plan['price'],
                    'plan_name' => $plan['plan_name'],
                    'service' => Str::title(str_replace('-', ' ', $slug))
                ])
            ], 200);
        endif;

        abort(403);
    }
}

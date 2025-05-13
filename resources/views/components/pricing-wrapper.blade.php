<div class="mod-w-full">
    <div class="mod-pt-8 sm:mod-flex mod-grid-3 mod-flex-col">
        @foreach ($plans as $plan)
        <div class="card-plan @if($plan['is_popular'] === true) card-plan-popular @endif">
            @if($plan['is_popular'] === true)
                <div class="tag-popular">POPULAR</div>
            @endif
            <div class="card-plan-title">
                <img alt="Plan {{ $plan['plan_name'] }}" class="mod-inline"
                    src="{{ asset('images/svg/pricing-icon-' . Str::lower($plan['plan_name']) . '.svg') }}"
                    width="64" height="64"
                    decoding="async" data-nimg="future" loading="lazy">
                <h3 class="plan-title">{{ $plan['plan_name'] }}</h3>
                <p class="plan-desc">
                    {!! $plan['description'] !!}
                </p>
                <p class="plan-price">₹{{ $plan['price'] }}
                    <span class="plan-gst">+ 18% GST</span>
                </p>
                <a href="javascript:void(0)" data-id="focus-first-input-btn"
                    data-amount="{{ $plan['price'] }}"
                    class="mod-flex btn btn-sm btn-primary icon-hover-right">
                    Get {{ $plan['plan_name'] }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="card-plan-features">
                @foreach ($plan['services'] as $service)
                <div class="features-list @if($service['is_active'] == 0) is-disabled @endif">
                    @if($service['is_active'] == 1)
                    <span class="checkline" size="24" role="img">
                        <svg viewBox="0 0 24 24" fill="none" width="24">
                            <path
                                d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </span>
                    @elseif($service['is_active'] == 0)
                    <span class="closeline" size="24" role="img">
                        <svg viewBox="0 0 24 24" fill="none" width="24">
                            <path
                                d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </span>
                    @else
                    <span class="flashinglight" size="24" role="img">
                        <svg viewBox="0 0 24 24" fill="none" width="24">
                            <path
                                d="M12.6946 10.6113H17.5557L11.3057 19.639V13.389H6.44458L12.6946 4.36127V10.6113Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                    @endif
                    <p class="mod-mb-0">{!! $service['name'] !!}</p>
                </div>
                @endforeach
            </div>
            <a href="javascript:void(0)" data-id="focus-first-input-btn" data-amount="{{ $plan['price'] }}"
                class="mod-flex btn btn-sm btn-primary mod-mt-4 icon-hover-right">
                Get {{ $plan['plan_name'] }}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                    </path>
                </svg>
            </a>
        </div>
        @endforeach
    </div>
</div>
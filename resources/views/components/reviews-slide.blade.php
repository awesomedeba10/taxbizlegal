@foreach ($testimonials as $testimonial)
<div class="splide__slide templateShowcase-slide">
    <div class="testimonials_card mod-flex mod-items-start mod-justify-start mod-flex-col mod-h-full mod-p-8 mod-mr-8">
        <div class="testimonials_content-top">
            <div class="testimonials_rating-wrapper mod-flex">
                @for ($k = 0; $k < $testimonial->star_count; $k++)
                <div class="mod-flex mod-items-center mod-justify-center mod-flex-col mod-mr-1">
                    <div class="icon-embed-xsmall w-embed"><svg width="100%"
                            viewBox="0 0 18 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                @endfor
            </div>
            <div class="mod-w-full mod-pt-4"></div>
            <legend class="testimonials-title">{{ $testimonial->title }}</legend>
            <div class="mod-w-full mod-pt-4"></div>
            <p class="testimonials-text">{{ $testimonial->review }}</p>
        </div>
        <div class="mod-w-full mod-pt-4"></div>
        <div class="testimonials_client mod-flex mod-mt-auto mod-items-center mod-text-left">
            <div class="testimonials_client-info">
                <span>{{ $testimonial->name }}</span>
            </div>
        </div><img
            src="https://cdn.prod.website-files.com/670e055571ec3fdaefa6c351/6711fac90075e0641c5b50c4_golf-quote-mark.svg"
            loading="lazy" alt="golf scorecard user quote" class="testimonials_quotemark">
    </div>
</div>
@endforeach
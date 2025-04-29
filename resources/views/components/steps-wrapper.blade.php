<div class="col-lg-12 d-flex flex-column mod-gap-8">
    <h2 class="display-6 mod-font-semibold mb-0">{!! $steps['title'] !!}</h2>
    <p class="mod-text-s-15 mod-leading-loose mod-font-medium mb-0 pe-xl-80 me-xxl-4 mod-w-5/6 sm:mod-w-full">{{ $steps['description'] }}</p>
    <div
        class="d-flex justify-content-center mod-mt-4 justify-content-lg-start gap-2 gap-sm-3 gap-xl-4 text-center svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
        @foreach ($steps['steps'] as $step)
        <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
            <div class="mod-flex">
                <span class="text-primary">
                    <img class="svg" src="{{ asset('images/svg/' . ($loop->iteration) . '-circle-icon.svg') }}" alt="step {{ $loop->iteration }}">
                </span>
                <figcaption class="mod-flex text-h6 mod-pl-3 mod-items-center">{{ $step['title'] }}</figcaption>
            </div>
            <p class="mod-mt-1 text-gray-600">
                @if(Str::startsWith(trim($step['description']), '<'))
                    {!! $step['description'] !!}
                @else
                    {{ $step['description'] }}
                @endif
            </p>
        </figure>
        @endforeach
    </div>
    <div>
        <a class="btn-custom-medium" href="{{ route('front.contact') }}" target="_self">
            <span class="btn-text btn-text--back">Get In Touch</span>
            <span class="btn-icon btn-icon--blue">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3 4a1 1 0 0 1 0-2h11v11a1 1 0 1 1-2 0V5.414l-8.293 8.293a1 1 0 0 1-1.414-1.414L10.586 4H3Z"
                        fill="white"></path>
                </svg>
                <span class="btn-text btn-text--front">Request a Callback</span>
            </span>
        </a>
    </div>
</div>
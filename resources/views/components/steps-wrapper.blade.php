<div class="col-lg-12 d-flex flex-column mod-gap-8">
    <h2 class="display-6 mod-font-semibold mb-0">{!! $steps['title'] ?? '' !!}</h2>
    <p class="mod-text-s-15 mod-leading-loose mod-font-medium mb-0 pe-xl-80 me-xxl-4 mod-w-5/6 sm:mod-w-full">
        {{ $steps['description'] ?? '' }}</p>
    <div
        class="d-flex justify-content-center mod-mt-4 justify-content-lg-start gap-2 gap-sm-3 gap-xl-4 text-center svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
        @if (!empty($steps['steps']))
            @foreach ($steps['steps'] as $step)
                <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                    <div class="mod-flex">
                        <img class="text-primary svg"
                            src="{{ asset('images/svg/' . $loop->iteration . '-circle-icon.svg') }}"
                            alt="step {{ $loop->iteration }}">
                        <figcaption class="mod-flex text-h6 mod-pl-3 mod-items-center">{{ $step['title'] }}</figcaption>
                    </div>
                    <p class="mod-mt-1 text-gray-600">
                        @if (Str::startsWith(trim($step['description']), '<'))
                            {!! $step['description'] ?? '' !!}
                        @else
                            {{ $step['description'] ?? '' }}
                        @endif
                    </p>
                </figure>
            @endforeach
        @endif
    </div>
    <div>
        <x-custom-mod-btn class="btn-custom-medium" data-id="focus-first-input-btn">
            <x-slot:hoverTitle>Request a Callback</x-slot>
            Get in Touch
        </x-custom-mod-btn>
    </div>
</div>

<a href="{{ $href }}" {{ $attributes->merge([]) }} target="_self">
    <span class="btn-text btn-text--back">{{ $slot }}</span>
    <span class="btn-icon {{ $btnIcon }}">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 4a1 1 0 0 1 0-2h11v11a1 1 0 1 1-2 0V5.414l-8.293 8.293a1 1 0 0 1-1.414-1.414L10.586 4H3Z"
                  fill="white"></path>
        </svg>
        <span class="btn-text btn-text--front">{{ $hoverTitle ?? $slot }}</span>
    </span>
</a>

<div class="accordion" id="faqList-{{ $slug }}">
    @foreach ($faqs as $faq)
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqList-{{ $slug }}-item{{ $loop->iteration }}" aria-expanded="false"
                aria-controls="faqList-{{ $slug }}-item{{ $loop->iteration }}">
                {{ $faq['question'] }}
                <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="#001C35" fill-rule="evenodd"
                            d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
        </h2>
        <div id="faqList-{{ $slug }}-item{{ $loop->iteration }}" class="accordion-collapse collapse"
            data-bs-parent="#faqList-{{ $slug }}">
            <div class="accordion-body content">
            {!! $faq['answer'] !!}
            </div>
        </div>
    </div>
    @endforeach
</div>
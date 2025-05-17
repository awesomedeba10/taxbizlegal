<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Debanjan Ganguly">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="current-path" content="{{ url()->current() }}">

    <title>@yield('title')@hasSection('title') | @endif Tax Biz Legal</title>

    {{-- <meta name="robots" content="index,follow">    
    <meta name="description"
        content="Vytvořte profesionální životopis a zvyšte své šance na pohovor! Už žádné složité formátování, díky jednoduchému editor CV.">
    <link rel="canonical" href="index.html"> --}}

    {{-- <meta property="og:locale" content="cs_CZ" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Huntee - knihovna kontaktů" />
<meta property="og:description" content="Vytvořte profesionální životopis a zvyšte své šance na pohovor! Už žádné složité formátování, díky jednoduchému editor CV." />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="Huntee" />
<meta property="og:updated_time" content="2025-02-21T17:42:44+01:00" />
<meta property="og:image" content="images/img/home/editor.png" />
<meta property="og:image:secure_url" content="images/img/home/editor.png" />
<meta property="og:image:width" content="1305" />
<meta property="og:image:height" content="786" />
<meta property="og:image:alt" content="Ukázka CV editor na počítači a telefonu" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="Huntee - knihovna kontaktů" />
<meta name="twitter:description" content="Vytvořte profesionální životopis a zvyšte své šance na pohovor! Už žádné složité formátování, díky jednoduchému editor CV." />
<meta name="twitter:image" content="images/img/home/editor.png" /> --}}

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/favicon.svg') }}" color="#006EEC">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">

    <meta name="apple-mobile-web-app-title" content="TaxBizLegal" />
    <meta name="msapplication-TileColor" content="#006eec">
    <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#3e78c6">

    @vite(['resources/js/app.js'])

    @stack('style')

</head>

<body>

    @include('frontend._layouts.header')

    @yield('content')

    @if (request()->path() !== 'orders/checkout')
    @include('frontend._layouts.footer')

    <div class="btn-float">
        <a target="_blank" href="https://wa.me/{{ config('app.site_info.support_wp_phone') }}?text=Hello,%20I%20need%20some%20assistance!">
            <div class="contact-icon">
                <img src="{{ asset('images/svg/whatsapp.svg') }}" alt="">
            </div>
        </a>
        <p class="text_icon">Talk to Us?</p>
    </div>
    @endif

    <div id="snippet-logInModal-modal">
    </div>
    <div id="snippet-lostPasswordModal-modal">
    </div>
    <div id="flashes" class="toast-container position-fixed translate-middle-x start-50">

        <div id="snippet--flashes" data-naja-snippet-append class="toast-container position-static mb-2">
        </div>

    </div>

    <template id="alertTemplate">

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"
            data-alert-toast>
            <div class="toast-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M20.0094 20.0009L12.0054 3.98437L4.04358 20.0009H20.0094ZM13.7944 3.09033C13.0567 1.61398 10.9491 1.61621 10.2145 3.09411L2.25265 19.1106C1.59175 20.4401 2.55884 22.0009 4.04358 22.0009H20.0094C21.4959 22.0009 22.4629 20.4366 21.7984 19.1068L13.7944 3.09033Z"
                        clip-rule="evenodd" />
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M12.0002 9.00093C12.5525 9.00093 13.0002 9.44865 13.0002 10.0009V14.0009C13.0002 14.5532 12.5525 15.0009 12.0002 15.0009C11.4479 15.0009 11.0002 14.5532 11.0002 14.0009V10.0009C11.0002 9.44865 11.4479 9.00093 12.0002 9.00093Z"
                        clip-rule="evenodd" />
                    <path fill="currentColor"
                        d="M13.0002 17.0009C13.0002 17.5532 12.5525 18.0009 12.0002 18.0009C11.4479 18.0009 11.0002 17.5532 11.0002 17.0009C11.0002 16.4486 11.4479 16.0009 12.0002 16.0009C12.5525 16.0009 13.0002 16.4486 13.0002 17.0009Z" />
                </svg>
                <div class="toast-content" data-tpl-alert-content></div>
                <button type="button" class="btn btn-close" data-bs-dismiss="toast" aria-label="Zavřít">
                    <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"
                            clip-rule="evenodd" />
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

    </template>
    <script>
        const JS_LOCALIZE = {
            delete: "Delete",
            deleteIcon: "<img alt='\"Delete\"' src=\"/images/svg/remove.svg\" width=\"24\" height=\"24\">",
            typeToSearch: "Start typing to search",
            typeToSearchOrAdd: "Start typing to search or create",
            clickPlusToAdd: "Nothing found. Click the plus to create",
            choices: {
                loadingText: "Loading...",
                noResultsText: "No results found",
                noChoicesText: "No items to choose from",
                itemSelectText: "",
                uniqueItemText: "Only unique values can be selected",
                customAddItemText: "Only values meeting the criteria can be selected",
                addItemText: (value) => {
                    return "Press Enter to select __value__".replace('__value__', value);
                },
                maxItemText: (maxItemCount) => {
                    return "The maximum number of selected items is __value__".replace('__value__', maxItemCount);
                }
            },
            dropzone: {
                dictDefaultMessage: "Drag the file here",
                dictFallbackMessage: "Your browser does not support drag'n'drop file uploads.",
                dictFallbackText: "Please use the fallback form below to upload your files.",
                dictFileTooBig: "The file is too large (5MB). Maximum size is 5MB.",
                dictInvalidFileType: "This file type is not supported.",
                dictResponseError: "The server responded with an error code statusCode.",
                dictCancelUpload: "Cancel upload",
                dictUploadCanceled: "Upload canceled.",
                dictCancelUploadConfirmation: "Are you sure you want to cancel this upload?",
                dictRemoveFile: "Remove file",
                dictMaxFilesExceeded: "No more files can be uploaded."
            }
        };
    </script>

    @stack('script')
</body>

</html>

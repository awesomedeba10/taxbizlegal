<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #cecece;
            font-family: "Red Hat Text", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            font-family: "Red Hat Text", sans-serif;
        }

        b {
            font-weight: 500;
        }

        p {
            margin: 10px 0;
        }

        ol {
            padding-inline-start: 20px;
            font-family: "Red Hat Text", sans-serif;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        p,
        table {
            font-size: 12px;
            font-family: "Red Hat Text", sans-serif;
        }

        .bank-logo {
            margin-right: 2px;
        }

        .vr {
            background: #fff;
            width: 2px;
            height: 16px;
            padding: 0 !important;
            margin-bottom: -3px;
            display: inline-block;
        }

        .main-container {
            background-color: #cecece;
        }

        .section {
            margin-bottom: 20px;
        }

        .bg-grey {
            background: #f0f0f0;
        }

        .email-container {
            background-color: #fff;
            max-width: 500px;
            margin: 0 auto;
        }

        .email-header__content,
        .email-body,
        .email-footer {
            padding: 5px 25px 5px 25px;
            margin: 0px 0px 0px 0px;
            font-family: "Red Hat Text", sans-serif;
        }

        .email-header__logo {
            padding: 10px 0;
        }

        .email-header__logo img {
            display: block;
            margin: 0 auto;
            width: 183px;
            height: 26px;
        }

        .email-header__content img {
            width: 280px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .email-header__content__title {
            margin: 10px 0 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        .email-header__content p {
            margin: 20px 0 20px 0;
            font-size: 13px;
        }

        .email-header__content__date {
            color: #b9b9b9;
        }

        .email-body__title {
            margin: 0 0 10px;
        }

        .email-footer {
            background: #f7f7f7;
            color: #676666;
        }

        .email-footer__body p {
            line-height: 1.5;
            text-align: justify;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: "Red Hat Text", sans-serif;
        }

        tr.row-break {
            height: 10px;
        }

        .table-col-2 td {
            width: 50%;
        }

        .table-col-3 th,
        .table-col-3 td {
            width: calc(100% / 3);
        }

        .table-invoice th {
            color: #797979;
            font-weight: 100;
            font-weight: 500;
        }

        .table-invoice thead th {
            border-bottom: 1px solid #797979;
        }

        .table-invoice thead th,
        .table-invoice td {
            padding: 10px 0;
        }

        .email-footer__bottom-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .email-footer p {
            color: #a7a7a7;
        }

        .email-footer__menu td {
            border-right: 1px solid #a7a7a7;
            text-align: right;
            padding: 5px;
        }

        .email-footer__menu td.last-child {
            border-right: 0;
            text-align: left;
            padding: 5px;
        }

        td.email-footer__bottom-info__contact {
            text-align: right;
        }

        td.email-footer__bottom-info__contact img {
            margin: 0 3px -2px 5px;
        }

        td.email-footer__bottom-info__contact p {
            margin: 2px 0 0;
        }

        .list-how-to-pay {
            border: 2px solid #ccc;
            padding: 10px 10px;
            border-radius: 8px;
        }

        .list-how-to-pay h3 {
            margin: 0 0 10px;
        }

        .list-how-to-pay li {
            line-height: 1.5;
            font-size: 12px;
        }

        button {
            background: #334ac0;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
            border: none;
            width: 98px;
            padding: 10px;
            height: 33px;
            border-radius: 5px;
            margin-top: 5px;
        }

        .btn img {
            width: 9px;
            margin-right: 5px;
        }

        .line {
            bottom: 60px;
            width: 100%;
            height: 1px;
            background: silver;
            margin-top: 30px;
        }

        .container-pesanan {
            width: 100%;
            background: #f6f6f6;
            border-radius: 5px;
        }

        .content_pesanan {
            display: flex;
            padding: 10px;
        }
    </style>
    <title>Payment Received Order #{{ Str::upper($order->order_id) }}</title>
</head>

<body>
    <div class="main-container">
        <div class="email-container">
            <div class="email-header">
                <div class="email-header__content">
                    <div class="email-header__logo">
                        <img style="width: 180px; margin-bottom: 10px; height: 50px"
                            src="{{ $message->embed(asset('images/svg/tbl_logo.svg')) }}" alt="TaxBizLegal Logo">
                    </div>
                    <h1 class="email-header__content__title" style="color: #334ac0;">
                        Payment Successful 🎉
                    </h1>
                    <p>
                        Hi {{ Str::title($order->cus_name) }},
                    </p>
                    <p>
                        We’ve successfully received your payment for the service:
                        {{ Str::title(str_replace('-', ' ', $order->service_name)) }} ({{ $order->service_plan_name }}
                        Plan).
                        <br><br>
                        Our team has started processing your request. You’ll be hearing from us shortly with the next
                        steps to complete your process.
                    </p>
                    <div class="line"></div>
                    <h3 style="font-size: 16px;">Order Summary</h3>
                    <div style="padding:10px 15px 10px;background:#F6F6F6; border-radius: 5px;">
                        <table>
                            <tbody>
                                <tr style="height:35px;">
                                    <td colspan="2"
                                        style="border-bottom: 1px solid #e5e5e5;padding:6px; font-size: 13px;text-align:left;">
                                        {{ Str::title(str_replace('-', ' ', $order->service_name)) }}
                                        <br>({{ $order->service_plan_name }} Plan)
                                    </td>
                                    <td
                                        style="border-bottom: 1px solid #e5e5e5; padding:6px; text-align:right; font-size: 12px; font-weight: bold; color:#000;text-align:right;">
                                        ₹ {{ number_format($order->service_price, 2, '.', ',') }}</td>
                                </tr>
                                <tr style="height:35px;">
                                    <td colspan="2"
                                        style="border-bottom: 1px solid #e5e5e5;padding:6px; font-size: 13px;text-align:left;">
                                        GST (18%)
                                    </td>
                                    <td
                                        style="border-bottom: 1px solid #e5e5e5; padding:6px; text-align:right; font-size: 12px; font-weight: bold; color:#000;text-align:right;">
                                        ₹ {{ number_format(round($order->service_price * 0.18), 2, '.', ',') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2"
                                        style="font-size: 14px;padding:6px;color: #9F9D9D;text-align:left">Subtotal</td>
                                    <td
                                        style="padding:6px; text-align:right; font-size: 12px; font-weight: bold; color:#000;text-align:right">
                                        ₹ {{ number_format($order->rzp_paid_amt, 2, '.', ',') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="line"></div>
                    <h3 style="font-size: 16px;">Customer Information</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td style="font-size:12px; padding-bottom:10px; font-weight: bold">Personal Information
                                </td>
                                <td style="font-size:12px; font-weight: bold; text-align: right;">Payment Via</td>
                            </tr>
                            <tr>
                                <td>{{ Str::title($order->cus_name) }}<br>Phone: +91 {{ $order->cus_phone }}</td>
                                <td style="font-size:12px; text-align: right;">Razorpay Secure<br> Payment Gateway</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="line"></div>
                    <div style="display: flex;">
                        <img src="{{ $message->embed(asset('images/svg/customer-support.svg')) }}"
                            style="width: 50px;height: 50px;padding: 10px;" />
                        <p style="font-size: 12px; color: #2b2a35;">
                            If you have any questions or need support, feel free to <a
                                href="{{ route('front.contact') }}" target="_blank"
                                style="color: rgb(34, 68, 218);">reach us</a>. We're here to help at every step.
                        </p>
                    </div>
                </div>
            </div>
            <div class="email-footer">
                <div class="email-footer__body">
                    <p style="text-align: center; color: #676666;">
                        You received this notification email from <br />
                        <a href="{{ route('front.home') }}" target="_blank"
                            style="text-decoration: none;color: rgb(34, 68, 218);">{{ Str::lower(config('app.name')) }}.com</a>
                        on behalf of
                    </p>
                    <p style="text-align: center; color: #676666; margin-bottom: 0px;">
                        {{ config('app.site_info.company_name') }}
                    </p>
                    <p style="text-align: center; color: #676666; margin-top: 2px; margin-bottom: 2px;">
                        {{ config('app.site_info.company_address') }}
                    </p>
                    <p style="text-align: center; color: #676666; margin-top: 0px; margin-bottom: 15px;">
                        CIN: {{ config('app.site_info.company_cin') }}
                    </p>
                </div>
                <div style="border: 1px solid #e5e5e5; text-align: center; box-sizing: border-box; border-radius: 5px;">
                    <table>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #e5e5e5;">
                                    <a href="{{ config('app.site_info.social_links.meta') }}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="#45444d" viewBox="0 0 16 16" style="padding:3px 0 0 0">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td style="border: 1px solid #e5e5e5;">
                                    <a href="{{ config('app.site_info.social_links.instagram') }}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="#45444d" viewBox="0 0 16 16" style="padding:3px 0 0 0">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                                <td style="border: 1px solid #e5e5e5">
                                    <a href="{{ config('app.site_info.social_links.linkedin') }}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="#45444d" viewBox="0 0 448 512" style="padding:3px 0 0 0">
                                            <path
                                                d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                                            </path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>

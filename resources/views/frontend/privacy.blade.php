@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <article class="container py-40 py-lg-5 py-xxl-80">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-xxl-8">
                    <h1 class="mb-3 mb-lg-40">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TaxBizLegal Privacy Policy, Disclaimer & User Agreement</font>
                        </font>
                    </h1>

                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">1. PRIVACY POLICY</font>
                        </font>
                    </h2>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Your Privacy Matters to Us</font>
                        </font>
                    </p>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TaxbizLegal is committed to protecting your personal information. This Privacy Policy outlines how we collect,
                                use, and safeguard your data</font>
                        </font>
                    </p>
                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Information We Collect:
                            </font>
                        </font>
                    </h3>
                    <ul>
                        <li style="vertical-align: inherit;">
                            Name, email, phone number, and address
                        </li>
                        <li style="vertical-align: inherit;">
                            PAN, GST, business registration details
                        </li>
                        <li style="vertical-align: inherit;">
                            Documents uploaded for service purposes
                        </li>
                        <li style="vertical-align: inherit;">
                            Website usage data via cookies and analytics
                        </li>
                    </ul>

                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">How We Use Your Information:
                            </font>
                        </font>
                    </h3>
                    <ul>
                        <li style="vertical-align: inherit;">
                            To deliver legal and business services
                        </li>
                        <li style="vertical-align: inherit;">
                            To communicate important updates
                        </li>
                        <li style="vertical-align: inherit;">
                            For internal auditing, analytics, and compliance
                        </li>
                        <li style="vertical-align: inherit;">
                            To process payments securely
                        </li>
                    </ul>

                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Data Sharing:
                            </font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">We do not sell or share your information with third parties, except:
                            </font>
                        </font>
                    </p>
                    <ul>
                        <li style="vertical-align: inherit;">
                            When required by law or court order
                        </li>
                        <li style="vertical-align: inherit;">
                            With trusted partners for service execution (e.g., government portals)
                        </li>
                    </ul>

                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Security Measures:
                            </font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">We use SSL encryption, secure cloud storage, and restricted internal access to protect your data.</font>
                        </font>
                    </p>

                    <h3>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Your Rights:
                            </font>
                        </font>
                    </h3>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">You may request to access, update, or delete your personal data by contacting us at {{ config('app.site_info.support_email') }}.</font>
                        </font>
                    </p>

                    <br>
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">2. DISCLAIMER</font>
                        </font>
                    </h2>

                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">The information and services provided on this website are for general informational and support purposes
                                only and do not constitute legal advice or legal representation.</font>
                        </font>
                    </p>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TaxbizLegal is not a law firm, and our team does not act as your attorney. For legal matters requiring court
                                representation or litigation, please consult a qualified advocate.</font>
                        </font>
                    </p>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">We are not responsible for:                            </font>
                        </font>
                    </p>
                    <ul>
                        <li style="vertical-align: inherit;">
                            Delays or rejections from government department
                        </li>
                        <li style="vertical-align: inherit;">
                            Inaccuracies caused by incorrect client information
                        </li>
                        <li style="vertical-align: inherit;">
                            Business decisions made based on our content
                        </li>
                    </ul>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Use of our website and services is at your own risk.
                            </font>
                        </font>
                    </p>

                    <br>
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">3. USER AGREEMENT</font>
                        </font>
                    </h2>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">When you create an account or place an order on our website, you agree to:
                            </font>
                        </font>
                    </p>
                    <ul>
                        <li style="vertical-align: inherit;">
                            Provide accurate and complete information
                        </li>
                        <li style="vertical-align: inherit;">
                            Maintain confidentiality of your login credentials
                        </li>
                        <li style="vertical-align: inherit;">
                            Use services only for lawful business purposes
                        </li>
                        <li style="vertical-align: inherit;">
                            Not impersonate others or use false information
                        </li>
                        <li style="vertical-align: inherit;">
                            Accept responsibility for any filings made on your behalf
                        </li>
                    </ul>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Violation of this agreement may lead to suspension or termination of your access to our platform without
                                refund.
                            </font>
                        </font>
                    </p>
                </div>
            </div>
        </article>
    </main>
@endsection

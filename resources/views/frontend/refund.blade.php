@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <article class="container py-40 py-lg-5 py-xxl-80">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-xxl-8">
                    <h1 class="mb-3 mb-lg-40">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">TaxBizLegal Refund Policy</font>
                        </font>
                    </h1>

                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">At <strong>TaxBizLegal</strong>, we strive to ensure complete satisfaction with our professional services. However, if you are not satisfied with the service provided, you may be eligible for a refund subject to the following terms and conditions:</font>
                        </font>
                    </p>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">We reserve the right to modify this User Agreement
                                without prior notice. It is your responsibility to review these terms periodically, and your
                                continued use of our site constitutes acceptance of any changes.</font>
                        </font>
                    </p>
                    <br>
                    <p>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Eligibility for Refund :</font>
                            </font>
                        </h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Refunds may be considered only if a service has not been initiated or any deliverable has not been provided.</font>
                        </font>
                        <br>
                        <font style="vertical-align: inherit;">
                            <ul>
                                <li>Refund requests must be made within 7 days of payment.</li>
                                <li>No refund will be issued once work has commenced, documentation submitted, or a legal/filing process has been initiated.</li>
                            </ul>
                        </font>
                    </p>
                    <br>
                    <p>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Non-Refundable Circumstances :</font>
                            </font>
                        </h2>
                        <font style="vertical-align: inherit;">
                            <ul>
                                <li>Government fees, taxes, and third-party charges are non-refundable.</li>
                                <li>Delays caused by client-side inaction (e.g., failure to provide required documents) will not be considered for a refund.</li>
                                <li>Refunds are not applicable for advisory or consultancy fees once the consultation has been completed.</li>
                            </ul>
                        </font>
                    </p>
                    <br>
                    <p>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">How to Request a Refund :</font>
                            </font>
                        </h2>
                        <font style="vertical-align: inherit;">
                            Submit your refund request in writing via email to our official support email mentioned below,
                        </font>
                        <font style="vertical-align: inherit;">
                            <ul>
                                <li>Include your name, service details, date of transaction, and reason for the refund request</li>
                                <li>Once approved, the refund will be processed within 10 to 15 business days to the original payment method.</li>
                            </ul>
                        </font>
                    </p>
                    <br>
                    <p>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Dispute Resolution :</font>
                            </font>
                        </h2>
                        <font style="vertical-align: inherit;">
                            Any disagreements arising out of refund claims will be resolved in accordance with applicable Indian laws and under the jurisdiction of Kolkata, India.
                        </font>
                    </p>
                    <br>
                    <p>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Contact Us :</font>
                            </font>
                        </h2>
                        <font style="vertical-align: inherit;">
                            <ul>
                                <li><strong>Registered Business Location: </strong>&nbsp;Kolkata, India</li>
                                <li><strong>Support Email: </strong>&nbsp;{{ config('app.site_info.support_email') }}</li>
                                <li><strong>Phone: </strong>&nbsp;{{ config('app.site_info.support_phone') }}</li>
                                <li><strong>Website: </strong>&nbsp;{{ config('app.url') }}</li>
                            </ul>
                        </font>
                    </p>
                </div>
            </div>
        </article>
    </main>
@endsection

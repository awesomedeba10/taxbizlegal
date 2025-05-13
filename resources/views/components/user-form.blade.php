<form action="{{ route('front.services.get-leads', ['part' => base64_encode('first'),'slug' => base64_encode($page)]) }}" method="post"
    id="frm-adeptRegistrationForm-form" class="loadable loadable-overlayed ajax" data-part="first" novalidate="">
    <div id="frm-container">
        <div class="form-floating required">
            <input type="text" name="name" maxlength="128" placeholder="" class="form-control text"
                id="frm-enquiryForm-form-user-name" required
                data-nette-rules='[{"op":":filled","msg":"Please type your Full Name"}]'>
            <label for="frm-enquiryForm-form-user-name" class="required">
                Name
            </label>
        </div>
    
        <div class="form-floating required">
            <input type="tel" name="phone" pattern="^[+\(\) 0-9]+$" placeholder=" " class="form-control"
                id="frm-enquiryForm-form-user-phone" required=""
                data-nette-rules="[
                    {&quot;op&quot;:&quot;:filled&quot;, &quot;msg&quot;:&quot;Please share your contact number.&quot;},
                    {&quot;op&quot;:&quot;:pattern&quot;, &quot;msg&quot;:&quot;The mobile number may contain only digits, spaces, and the + symbol.&quot;, &quot;arg&quot;:&quot;^[+\\(\\) 0-9]+$&quot;}
                ]">
    
            <label for="frm-enquiryForm-form-user-phone" class="required">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Mobile number</font>
                </font>
            </label>
        </div>
    
        <div class="form-floating required">
            <input type="email" name="email" placeholder=" " class="form-control text"
                id="frm-enquiryForm-form-user-mail" required=""
                data-nette-rules="[
                    {&quot;op&quot;:&quot;:filled&quot;, &quot;msg&quot;:&quot;Please share your email.&quot;},
                    {&quot;op&quot;:&quot;:email&quot;, &quot;msg&quot;:&quot;The email address formnat is not valid.&quot;}
                ]">
            <label for="frm-enquiryForm-form-user-mail" class="required">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">E-mail</font>
                </font>
            </label>
        </div>
    
        <div class="form-floating required">
            <select name="state" class="form-select" data-select="" id="frm-enquiryForm-form-user-state"
                data-nette-rules='[{"op":":filled","msg":"Please select your state of residency/business."}]'>
                <option value="">Please select your current state</option>
                <option value="andhra-pradesh">Andhra Pradesh</option>
                <option value="arunachal-pradesh">Arunachal Pradesh</option>
                <option value="assam">Assam</option>
                <option value="bihar">Bihar</option>
                <option value="chhattisgarh">Chhattisgarh</option>
                <option value="goa">Goa</option>
                <option value="gujarat">Gujarat</option>
                <option value="haryana">Haryana</option>
                <option value="himachal-pradesh">Himachal Pradesh</option>
                <option value="jharkhand">Jharkhand</option>
                <option value="karnataka">Karnataka</option>
                <option value="kerala">Kerala</option>
                <option value="madhya-pradesh">Madhya Pradesh</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="manipur">Manipur</option>
                <option value="meghalaya">Meghalaya</option>
                <option value="mizoram">Mizoram</option>
                <option value="nagaland">Nagaland</option>
                <option value="odisha">Odisha</option>
                <option value="punjab">Punjab</option>
                <option value="rajasthan">Rajasthan</option>
                <option value="sikkim">Sikkim</option>
                <option value="tamil-nadu">Tamil Nadu</option>
                <option value="telangana">Telangana</option>
                <option value="tripura">Tripura</option>
                <option value="uttar-pradesh">Uttar Pradesh</option>
                <option value="uttarakhand">Uttarakhand</option>
                <option value="west-bengal">West Bengal</option>
                <option value="andaman-nicobar-islands">Andaman & Nicobar Islands</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="dadra-nagar-haveli-daman-diu">Dadra & Nagar Haveli and Daman & Diu</option>
                <option value="delhi">Delhi</option>
                <option value="jammu-kashmir">Jammu & Kashmir</option>
                <option value="ladakh">Ladakh</option>
                <option value="lakshadweep">Lakshadweep</option>
                <option value="puducherry">Puducherry</option>
            </select>
            <div class="form-text mod-pl-0">This'll be used to meet state-specific compliance needs.</div>
            <img src="{{ asset('images/svg/search.svg') }}" width="24" height="24"
                class="form-search-img input-addon-left">
            <label for="frm-enquiryForm-form-user-state" class="required form-text">State</label>
        </div>
    
        <div class="form-check required mt-4">
            <input type="checkbox" name="_comply" class="form-check-input" id="frm-enquiryForm-form-_comply" required=""
                data-nette-rules="[
                    {&quot;op&quot;:&quot;:filled&quot;, 
                    &quot;msg&quot;:&quot;Please agree to T&C to continue.&quot;}
            ]">
    
            <label class="form-check-label required" for="frm-enquiryForm-form-_comply">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">I agree to </font>
                </font>
                <a href="{{ route('front.terms') }}" target="_blank" rel="noopener norefererrer">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">the terms of use of the taxbizlegal.com
                        </font>
                    </font>
                </a>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;"> and </font>
                </font><a href="{{ route('front.privacy') }}" target="_blank" rel="noopener noreferrer">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">the privacy policy</font>
                    </font>
                </a>
            </label>
        </div>
    </div>

    <div class="form-submit">

        <button type="submit" name="_submit" class="icon-hover-right btn btn-sm btn-primary loadable-disabled">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Enquire Now</font>
            </font><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                </path>
            </svg>
        </button>
    </div>

    <template id="frm-container-part">
        <div class="mod-w-full mod-p-4 mod-mb-6 mod-rounded-lg mod-border-green-350 bs-green-bg-300 text-green">
            Thank you for showing interest in our service! Please select your preferred plan to continue to checkout. Need assistance? Don’t worry — our experts will reach out to guide you through the process.        </div>
        <div class="form-check-list service-form required">
            <label class="form-check-list-title required">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Choose your Plans*</font>
                </font>
            </label>

            @foreach ($plans as $plan)
            <label class="form-check mod-w-full mod-rounded-lg mod-cursor-pointer mod-py-2 mod-pl-2">
                <input type="radio" name="selected_plan" class="form-check-input"
                    required="" @if($loop->first) checked @endif data-amount="{{ $plan['price'] }}"
                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Please select a plan to proceed.&quot;}]"
                    value="{{ $plan['uuid'] }}" data-autosubmit-handled="1">
                <div class="form-check-label mod-flex mod-pr-2 mod-font-semibold mod-text-s-22">
                    <div class="mod-text-left mod-flex-grow">{{ $plan['plan_name'] }}</div>
                    <div class="mod-text-right">₹ {{ $plan['price'] }}
                        <span class="mod-text-s-10 mod-font-normal">+18% GST</span>
                    </div>
                </div>
            </label>
            @endforeach
        </div>
    </template>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>

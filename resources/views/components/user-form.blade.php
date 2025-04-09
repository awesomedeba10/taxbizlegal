<form action="/registrace/adept" method="post" id="frm-adeptRegistrationForm-form" class="loadable loadable-overlayed ajax"
    novalidate="">


    <div class="form-floating required">
        <input type="text" name="user[name]" maxlength="128" placeholder=" " class="form-control text"
            id="frm-adeptRegistrationForm-form-user-name" required=""
            data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required&quot;}]">

        <label for="frm-adeptRegistrationForm-form-user-name" class="required">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Name</font>
            </font>
        </label>
    </div>

    <div class="form-floating required">
        <input type="tel" name="user[phone]" pattern="^[+\(\) 0-9]+$" placeholder=" " class="form-control"
            id="frm-adeptRegistrationForm-form-user-phone" required=""
            data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Telefonní číslo' je povinné.&quot;},{&quot;op&quot;:&quot;:pattern&quot;,&quot;msg&quot;:&quot;Telefonní číslo může obsahovat pouze čísla, mezeru a znak +.&quot;,&quot;arg&quot;:&quot;^[+\\(\\) 0-9]+$&quot;}]">

        <label for="frm-adeptRegistrationForm-form-user-phone" class="required">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Mobile number</font>
            </font>
        </label>
    </div>

    <div class="form-floating required">
        <input type="email" name="user[mail]" placeholder=" " class="form-control text"
            id="frm-adeptRegistrationForm-form-user-mail" required=""
            data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;E-mailová adresa v poli 'E-mail' není ve správném formátu.&quot;}]">

        <label for="frm-adeptRegistrationForm-form-user-mail" class="required">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">E-mail</font>
            </font>
        </label>
    </div>

    <div class="form-floating required">
        <select name="schools[0][schoolDegree]" class="form-select" data-select=""
            id="frm-schoolForm-form-schools-0-schoolDegree"
            data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;E-mailová adresa v poli 'E-mail' není ve správném formátu.&quot;}]">
            <option value="">Neuvedeno</option>
            <option value="35">Nedokončeno</option>
            <option value="16">Vysvědčení ZŠ</option>
        </select>
        <div class="form-text">Pokud je neukončené, vyberte "Nedokončeno"</div>
        <img src="/build/svg/search.svg" width="24" height="24" class="input-addon-left">
        <label for="frm-schoolForm-form-schools-0-schoolDegree">Způsob ukončení studia</label>
    </div>

    <div class="form-check required mt-40">
        <input type="checkbox" name="_comply" class="form-check-input" id="frm-adeptRegistrationForm-form-_comply"
            required=""
            data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Souhlasím s podmínkami užití portálu a zásadami ochrany osobních údajů' je povinné.&quot;}]">

        <label class="form-check-label required" for="frm-adeptRegistrationForm-form-_comply">
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

    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>

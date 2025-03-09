@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="halfs offset-container offset-lg-40 offset-xxl-80">
            <aside class="half half--right half--lg-bg order-first order-lg-0 offset-container offset-lg-40">
                <blockquote class="row justify-content-center g-0 sticky-top pt-32 py-lg-80 py-xxl-120 mb-0">


                    <div class="col-6 col-md-5 text-primary svg-scale scale-32 scale-lg-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" fill="none"
                            viewBox="0 0 32 20">
                            <path fill="#006EEC" fill-opacity=".08"
                                d="M1.59483 20C1.12229 20 0.738348 19.8512 0.443009 19.5536C0.14767 19.1964 0 18.8095 0 18.3929C0 17.9167 0.0590678 17.5 0.177204 17.1429L5.93632 2.32143C6.29072 1.60714 6.67467 1.04167 7.08814 0.625003C7.50162 0.208334 8.09229 0 8.86017 0H13.4675C13.9991 0 14.4126 0.178571 14.7079 0.535713C15.0032 0.892858 15.1214 1.36905 15.0623 1.96429L12.6701 17.1429C12.5519 17.9762 12.2566 18.6607 11.784 19.1964C11.3115 19.7321 10.6617 20 9.83479 20H1.59483ZM18.5178 20C18.1043 20 17.7204 19.8512 17.3659 19.5536C17.0706 19.1964 16.9229 18.8095 16.9229 18.3929C16.9229 18.0952 17.0115 17.6786 17.1887 17.1429L22.9479 2.32143C23.5385 0.77381 24.5131 0 25.8717 0H30.479C30.9515 0 31.3355 0.178571 31.6308 0.535713C31.9262 0.892858 32.0443 1.36905 31.9852 1.96429L29.6816 17.1429C29.3272 19.0476 28.3526 20 26.7577 20H18.5178Z">
                            </path>
                        </svg>
                        <p class="text-h3 my-12">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Thanks to Huntee, I didn't look for a job, but I got
                                    it.</font>
                            </font>
                        </p>
                        <cite class="text-h5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Marek, plumber</font>
                            </font>
                        </cite>
                    </div>
                    <div class="col-6 col-sm-5 col-md-4 col-lg-7">
                        <div class="ms-xl-n5 ms-xxl-n80">
                            <figure class="ratio mb-0 mb-sm-n4 mb-lg-n5 mb-xxl-n80" style="--bs-aspect-ratio:109%">
                                <img alt="Marek, plumber" src="{{ asset('build/img/registration/marek2.png') }}" width="890"
                                    height="974">
                            </figure>
                        </div>
                    </div>
                </blockquote>
            </aside>
            <div class="half half--left py-40 py-lg-5 py-xxl-80 offset-container offset-lg-40 offset-xxl-120">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <h1 class="h2 mb-lg-20">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Getting started</font>
                            </font>
                        </h1>
                        <p class="mb-4 mb-lg-40">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Add details for communication with HR professionals and access to your account. Already
                                    registered?
                                </font>
                            </font><a href="/registrace/adept?do=logIn" class="ajax" data-naja-history="off">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Log in</font>
                                </font>
                            </a>
                        </p>
                        <form action="/registrace/adept" method="post" id="frm-adeptRegistrationForm-form"
                            class="loadable loadable-overlayed ajax" novalidate="">


                            <div class="form-floating required">
                                <input type="text" name="user[name]" maxlength="128" placeholder=" "
                                    class="form-control text" id="frm-adeptRegistrationForm-form-user-name" required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Jméno' je povinné.&quot;}]">

                                <label for="frm-adeptRegistrationForm-form-user-name" class="required">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Name</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-floating required">
                                <input type="text" name="user[surname]" maxlength="128" placeholder=" "
                                    class="form-control text" id="frm-adeptRegistrationForm-form-user-surname"
                                    required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Příjmení' je povinné.&quot;}]">

                                <label for="frm-adeptRegistrationForm-form-user-surname" class="required">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Surname</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-floating required">
                                <input type="tel" name="user[phone]" pattern="^[+\(\) 0-9]+$" placeholder=" "
                                    class="form-control" id="frm-adeptRegistrationForm-form-user-phone" required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Telefonní číslo' je povinné.&quot;},{&quot;op&quot;:&quot;:pattern&quot;,&quot;msg&quot;:&quot;Telefonní číslo může obsahovat pouze čísla, mezeru a znak +.&quot;,&quot;arg&quot;:&quot;^[+\\(\\) 0-9]+$&quot;}]">

                                <label for="frm-adeptRegistrationForm-form-user-phone" class="required">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Telephone number</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-floating required">
                                <input type="email" name="user[mail]" placeholder=" " class="form-control text"
                                    id="frm-adeptRegistrationForm-form-user-mail" required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'E-mail' je povinné.&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;E-mailová adresa v poli 'E-mail' není ve správném formátu.&quot;}]">

                                <label for="frm-adeptRegistrationForm-form-user-mail" class="required">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">E-mail</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-floating required">
                                <input type="password" name="password" maxlength="256"
                                    pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$"
                                    id="password-67c4d353e069d" placeholder=" " class="form-control text" required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Heslo' je povinné.&quot;},{&quot;op&quot;:&quot;:pattern&quot;,&quot;msg&quot;:&quot;Heslo musí obsahovat alespoň 8 znaků, jedno malé a jedno velké písmeno a jedno číslo.&quot;,&quot;arg&quot;:&quot;^\\S*(?=\\S{8,})(?=\\S*[a-z])(?=\\S*[A-Z])(?=\\S*[\\d])\\S*$&quot;}]">

                                <button type="button" class="btn btn-reset input-addon-right"
                                    data-password-toggle="#password-67c4d353e069d" aria-label="Show/hide password">
                                    <img class="input-icon-type-password" src="/build/svg/visibility.svg" width="24"
                                        height="24">

                                    <img class="input-icon-type-text" src="/build/svg/visibility-off.svg" width="24"
                                        height="24">
                                </button>

                                <label for="password-67c4d353e069d" class="required">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Password</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-check required mt-40">
                                <input type="checkbox" name="_comply" class="form-check-input"
                                    id="frm-adeptRegistrationForm-form-_comply" required=""
                                    data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Souhlasím s podmínkami užití portálu Huntee a zásadami ochrany osobních údajů' je povinné.&quot;}]">

                                <label class="form-check-label required" for="frm-adeptRegistrationForm-form-_comply">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I agree to </font>
                                    </font><a href="/stranka/podminky-uziti-portalu" target="_blank"
                                        rel="noopener norefererrer">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">the terms of use of the Huntee portal
                                            </font>
                                        </font>
                                    </a>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"> and </font>
                                    </font><a href="/stranka/zpracovani-osobnich-udaju" target="_blank"
                                        rel="noopener noreferrer">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">the privacy policy</font>
                                        </font>
                                    </a>
                                </label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" name="_newsletter" class="form-check-input"
                                    id="frm-adeptRegistrationForm-form-_newsletter" checked="">

                                <label class="me-n3 form-check-label" for="frm-adeptRegistrationForm-form-_newsletter">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">I want to receive news and tips from the
                                            world of the labor market to my email</font>
                                    </font>
                                </label>
                            </div>

                            <div class="form-submit">


                                <button type="submit" name="_submit"
                                    class="icon-hover-right btn btn-primary loadable-disabled">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Register</font>
                                    </font><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>


                            <input type="hidden" name="_token_" value="v8ae0hj2iiDYQeCcHwGaf9yAmBKJSVnwo7TVs="><input
                                type="hidden" name="_do" value="adeptRegistrationForm-form-submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

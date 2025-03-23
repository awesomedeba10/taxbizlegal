<footer class="footer">
    <div class="container">
        <div class="row gy-40 g-sm-40 g-lg-32 mb-40">
            <div class="col-sm-6 col-lg-3 order-sm-1 order-lg-0">
                <a href="index.html" class="footer-logo">
                    <img alt="taxbizlegal.com logo" src="{{ asset('images/img/logo.png') }}" width="205" height="61">
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 order-sm-3 order-lg-0">
                <h3 class="mb-3 mb-lg-4 pb-lg-2">Contact</h3>
                <p><a href="">support@taxbizlegal.com</a></p>
                <p><a href="tel:">+91 1234554321</a></p>
            </div>
            <div class="col-sm-6 col-lg-3 order-sm-4 order-lg-0">
                <h3 class="mb-3 mb-lg-4 pb-lg-2">Useful</h3>
                <p><a href="">ITR Filings</a></p>
                {{-- <p><a href="registrace/adept.html">Vytvořit pracovní profil</a></p> --}}
                <p><a href="{{ route('front.contact') }}">Contact Us</a></p>
                <p><a href="blog.html">Blog</a></p>
            </div>
            <div class="col-sm-6 col-lg-3 order-sm-2 order-lg-0">
                <h3 class="mb-3 mb-lg-4 pb-lg-2">Social Sites</h3>
                <div class="d-flex gap-20">
                    <a href="" target="_blank"
                        rel="noopener noreferrer" class="footer-social" aria-label="Facebook"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg></a>
                    <a href="" target="_blank" rel="noopener noreferrer"
                        class="footer-social" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg></a>
                    <a href="" target="_blank"
                        rel="noopener noreferrer" class="footer-social" aria-label="LinkedIN"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 448 512">
                            <path
                                d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                        </svg></a>
                </div>
            </div>
        </div>

        <div class="row gy-20 gx-lg-40 mt-lg-80 pt-xxl-4 align-items-center">
            <div class="col-lg-auto order-2 order-lg-1">
                Powered by TaxBizLegal | {{ now()->year }}
            </div>
            <div
                class="col-sm-auto d-flex flex-wrap order-first order-lg-2 order-xl-last gap-3 gap-lg-40 ms-lg-auto">
                {{-- <a href="stranka/podminky-uziti-portalu.html">Podmínky užívání portálu</a> --}}
                <a href="{{ route('front.terms') }}">Terms & Conditions</a>
                <a href="{{ route('front.privacy') }}">Privacy Policies</a>
            </div>
            <figure
                class="col-lg-auto flex-xl-grow-1 order-last mb-0 pt-1 pt-xl-0 order-xl-2 text-xl-center d-flex gap-3 justify-content-center align-items-center">
                <img class="img-fluid" alt="VISA" src="{{ asset('images/svg/visa-white.svg') }}" width="74"
                    height="24">
                <img class="img-fluid" alt="Mastercard" src="{{ asset('images/svg/mastercard.svg') }}" width="45"
                    height="28">
            </figure>
        </div>
    </div>
</footer>
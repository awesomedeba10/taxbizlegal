<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    @vite(['resources/js/admin/login.js'])

    <title>Login</title>
</head>

<body>
    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('{{ asset('images/img/bg-portal.webp') }}');"></div>
        <div class="contents">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="mod-flex mod-justify-center mod-items-center mx-auto mod-mb-2">
                                <img class="" width="150" height="50"
                                    src="{{ asset('images/svg/tbl_logo.svg') }}" alt="taxbizlegal logo">
                            </div>
                            <div class="text-center mod-mt-2 mod-mb-6">
                                <h3>Access to <strong>Ops Portal</strong></h3>
                                {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
                            </div>
                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf
                                <div class="form-group first mod-mb-4">
                                    <label for="email">Username</label>
                                    <input type="text" class="form-control" placeholder="Your Email"
                                        id="email" name="email">
                                    @error('email')
                                    <div class="mod-items-left mod-mb-3 mod-mt-1 mod-text-semibold" style="color:red;">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group last mod-mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password"
                                        id="password" name="password">
                                    @error('pass')
                                    <div class="mod-items-left mod-mb-3 mod-mt-1 mod-text-semibold" style="color:red;">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="d-sm-flex mod-mb-6 align-items-center">
                                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" name="remember" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ms-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>

                                <button type="submit"
                                    class="btn btn-block btn-custom mod-w-full mod-flex mod-justify-center mod-gap-2 mod-items-center">
                                    LOGIN
                                    <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="18" height="16" viewBox="0 0 96.108 122.88"
                                        enable-background="new 0 0 96.108 122.88" xml:space="preserve">
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.892,56.036h8.959v-1.075V37.117c0-10.205,4.177-19.484,10.898-26.207v-0.009 C29.473,4.177,38.754,0,48.966,0C59.17,0,68.449,4.177,75.173,10.901l0.01,0.009c6.721,6.723,10.898,16.002,10.898,26.207v17.844 v1.075h7.136c1.59,0,2.892,1.302,2.892,2.891v61.062c0,1.589-1.302,2.891-2.892,2.891H2.892c-1.59,0-2.892-1.302-2.892-2.891 V58.927C0,57.338,1.302,56.036,2.892,56.036L2.892,56.036z M26.271,56.036h45.387v-1.075V36.911c0-6.24-2.554-11.917-6.662-16.03 l-0.005,0.004c-4.111-4.114-9.787-6.669-16.025-6.669c-6.241,0-11.917,2.554-16.033,6.665c-4.109,4.113-6.662,9.79-6.662,16.03 v18.051V56.036L26.271,56.036z M49.149,89.448l4.581,21.139l-12.557,0.053l3.685-21.423c-3.431-1.1-5.918-4.315-5.918-8.111 c0-4.701,3.81-8.511,8.513-8.511c4.698,0,8.511,3.81,8.511,8.511C55.964,85.226,53.036,88.663,49.149,89.448L49.149,89.448z" />
                                        </g>
                                    </svg>
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

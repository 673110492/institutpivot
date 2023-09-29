<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.4.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:54:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>3iA Admin </title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest"
        href="{{ asset('assets/img/favicons/manifest.json">
                                                                                                                                                                                                                                                            <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('assets/js/config..js') }}"></script>
    <script src="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min..js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <div class="row flex-center min-vh-100 py-6">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4"
                        href="{{ asset('#') }}"><span class="font-sans-serif fw-bolder fs-5 d-inline-block">3iA
                            ADMIN</span></a>
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <div class="row flex-between-center mb-2">
                                <div class="col-auto">
                                    <h5>Log in</h5>
                                </div>
                            </div>
                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                @enderror
                                <div class="mb-3">
                                    <input class="form-control" type="email" placeholder="email" name="email" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="password" placeholder="Password"
                                        name="password" />
                                </div>
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                id="basic-checkbox"  name="remember" /><label
                                                class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-auto"><a class="fs--1" href="forgot-password.html')}}">Forgot
                                            Password?</a></div>
                                </div>

                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                        type="submit">Log in</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min..js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min..js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min..js') }}"></script>
    <script src="{{ asset('vendors/is/is.min..js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min..js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min..js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min..js') }}"></script>
    <script src="{{ asset('assets/js/theme..js') }}"></script>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/pages/authentication/simple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 May 2022 07:54:32 GMT -->

</html>

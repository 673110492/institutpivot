<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LE PIVOT Admin</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet">

    <style>
        /* Additional styling for the layout */
        .login-container {
            display: flex;
            flex-direction: row; /* Two columns: one for logo and one for form */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-logo-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form-section {
            flex: 1;
            max-width: 400px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-form-section .card-body {
            padding: 20px;
        }

        .login-form-section h5 {
            margin-bottom: 20px;
        }

        .login-form-section .form-control {
            margin-bottom: 15px;
        }

        /* Responsive design for mobile devices */
        @media (max-width: 767px) {
            .login-container {
                flex-direction: column; /* Stack the sections on top of each other on small screens */
                padding: 10px;
            }

            .login-logo-section {
                margin-bottom: 20px;
            }

            .login-form-section {
                width: 100%;
                box-shadow: none;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <main class="main" id="top">
        <div class="container">
            <div class="login-container">
                <!-- Logo and Name Section -->
                <div class="login-logo-section">
                    <a class="d-flex flex-center mb-4" >
                        <img src="{{ asset('img/logo_pivo.jpg') }}" alt="LE PIVOT Logo" style="max-width: 200px;">

                        <span class="font-sans-serif fw-bolder fs-5 d-inline-block">LE PIVOT ADMIN</span>
                    </a>
                </div>

                <!-- Login Form Section -->
                <div class="login-form-section">
                    <div class="card">
                        <div class="card-body">
                            <div class="row flex-between-center mb-2">
                                <div class="col-auto">
                                    <h5>Log in</h5>
                                </div>
                            </div>
                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf

                                @if (Session::get('message'))
                                    <div class="position-fixed top-5 end-0 p-3" style="z-index: 5">
                                        <div class="toast hide" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header bg-danger text-white"><strong
                                                    class="me-auto">Notification</strong><small>1 S ago</small><button
                                                    class="btn-close btn-close-white" type="button" data-bs-dismiss="toast"
                                                    aria-label="Close"></button></div>
                                            <div class="toast-body bg-danger text-white">{{ Session::get('message') }}</div>
                                        </div>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <input class="form-control" type="email" placeholder="Email" name="email" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" type="password" placeholder="Password" name="password" />
                                </div>
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="basic-checkbox" name="remember" />
                                            <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a class="fs--1" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100 mt-3" type="submit">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS Files -->
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>

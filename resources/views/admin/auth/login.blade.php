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
        /* General styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .login-form-section {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .login-form-section:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        .login-logo-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-logo {
            max-width: 120px;
            margin-bottom: 20px;
        }

        h5 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #2a2a2a;
            text-align: center;
        }

        .form-control {
            border-radius: 50px;
            border: 1px solid #ccc;
            padding: 12px;
            font-size: 1rem;
            margin-bottom: 20px;
            transition: border-color 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 50px;
            padding: 12px;
            font-size: 1rem;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        /* Responsive design for mobile devices */
        @media (max-width: 767px) {
            .login-form-section {
                width: 90%;
                padding: 20px;
            }

            .login-logo {
                max-width: 100px;
            }

            h5 {
                font-size: 1.2rem;
            }
        }

        /* Toast styling */
        .toast {
            transition: opacity 0.3s ease;
        }
    </style>
</head>

<body>

    <main class="main" id="top">
        <div class="container">
            <div class="login-container">
                <!-- Login Form Section -->
                <div class="login-form-section">
                    <div class="login-logo-section">
                        <a class="d-flex flex-center mb-4">
                            <img src="{{ asset('img/logo_pivo.jpg') }}" alt="LE PIVOT Logo" class="login-logo">
                        </a>
                    </div>

                    <!-- Displaying session messages -->
                    @if (Session::get('message'))
                        <div class="position-fixed top-5 end-0 p-3" style="z-index: 5">
                            <div class="toast show" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header bg-danger text-white">
                                    <strong class="me-auto">Notification</strong>
                                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body bg-danger text-white">{{ Session::get('message') }}</div>
                            </div>
                        </div>
                    @endif

                    <!-- Login Form -->
                    <h5>Log in</h5>
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="email" placeholder="Email" name="email" required />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="password" placeholder="Password" name="password" required />
                        </div>

                        <div class="row flex-between-center mb-4">
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
    </main>

    <!-- JS Files -->
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>

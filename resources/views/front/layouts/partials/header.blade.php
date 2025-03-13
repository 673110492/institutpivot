<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Institut LE PIVOT</title>
    <link rel="icon" href="{{ asset('img/logo_pivo.jpg') }}" type="image/png">


    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/elegant_Icon/elegent_icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/magnify_popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/countdown/css/Countdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/elegant-icons/1.0.1/css/elegant-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.2.0/css/jquery.countdown.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flaticon/2.1.0/css/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://votresite.com/css/courses.css" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Global styles for the header */
        .header_part {
            position: relative;
            z-index: 999;
        }

        .sub_header {
            background-color: rgba(0, 0, 255, 0.296);
            padding: 10px 0;
        }

        /* Mobile Menu Styles */
        .modal {
            display: none;
            /* Hide modal by default */
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: auto;
            padding-top: 60px;
        }

        .modal-content {
            background-color: #021528;
            margin: 5% auto;
            padding: 20px;
            border: none;
            width: 90%;
            /* Adjusted for better mobile responsiveness */
            max-width: 400px;
            border-radius: 10px;
            color: white;
            text-align: center;
        }

        .close {
            color: white;
            font-size: 30px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        .close:hover,
        .close:focus {
            color: #1E90FF;
            text-decoration: none;
            cursor: pointer;
        }

        /* Styles for the modal navigation */
        .modal-nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .modal-nav ul li {
            margin-bottom: 15px;
        }

        .modal-nav ul li a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            padding: 10px;
            transition: color 0.3s ease;
        }

        .modal-nav ul li a:hover {
            color: #1E90FF;
        }

        /* Mobile menu icon */
        .sidebar_icon {
            display: block;
            cursor: pointer;
        }

        /* Navbar for large screens */
        .navbar_bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar_bar ul {
            display: flex;
            justify-content: flex-start;
            list-style-type: none;
        }

        .navbar_bar ul li {
            margin-right: 25px;
        }

        /* Responsive styles */
        @media (min-width: 768px) {
            .sidebar_icon {
                display: none;
            }

            /* Adjust Logo */
            .logo-avatar img {
                width: 150px;
            }

            /* Align the Pre-inscription Button */
            .navbar_btn {
                margin-left: auto;
            }

            /* Make the navbar items row flexible */
            .navbar_bar ul li {
                margin-right: 25px;
            }
        }

        /* Styles for mobile layout */
        @media (max-width: 768px) {
            .logo-avatar img {
                width: 120px;
            }

            .navbar_btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <style>
        /* CSS to ensure horizontal layout of social media icons on all screen sizes */
        .header_contact_info {
            display: flex;
            gap: 15px;
            /* Space between icons */
            justify-content: flex-start;
            /* Align icons to the left */
            flex-wrap: wrap;
            /* Allow icons to wrap if needed */
        }

        .social-icon {
            font-size: 20px;
            /* Adjust the size of icons */
            text-decoration: none;
            /* Remove underline */
            transition: color 0.3s ease;
        }

        .social-icon:hover {
            color: #1E90FF;
            /* Highlight color when hovering */
        }

        /* Ensure icons are aligned horizontally even on small screens */
        @media (max-width: 767px) {
            .header_contact_info {
                justify-content: center;
                /* Center the icons on smaller screens */
            }
        }
    </style>
    <header class="header_part">
        <div class="sub_header bg-dark" style="background-color: rgba(0, 0, 255, 0.296)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-7">
                        <div class="header_contact_info">
                            <!-- Icons des Réseaux Sociaux -->
                            <a href="https://www.facebook.com" target="_blank" class="text-white social-icon">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.twitter.com" target="_blank" class="text-white social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank" class="text-white social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com" target="_blank" class="text-white social-icon">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="header_login_info">
                            <!-- Localisation -->
                            <a href="#" class="text-white">
                                <i class="fas fa-map-marker-alt"></i> Cameroun, Ouest, Dschang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_iner d-flex justify-content-between align-items-center">
                            <!-- Mobile Menu Toggle -->
                            <div class="sidebar_icon troggle_icon d-lg-none" onclick="openModal()">
                                <i class="icon_menu"></i>
                            </div>

                            <!-- Logo Section -->
                            <div class="logo-avatar">
                                <a href="{{ route('accueil.index') }}">
                                    <img src="{{ asset('img/logo_pivo.jpg') }}" alt="Institut LE PIVOT"
                                        class="avatar-img">
                                </a>
                            </div>

                            <!-- Navigation Menu -->
                            <nav class="navbar_bar">
                                <ul>
                                    <li><a href="{{ route('accueil.index') }}" class="nav-link">Accueil</a></li>
                                    <li><a href="{{ route('propos.index') }}" class="nav-link">À propos</a></li>
                                    <li class="mega_menu_dropdown">
                                        <a href="#" class="nav-link">Formation</a>
                                        <ul>
                                            <li><a href="{{ route('cours.cat') }}">Catégories</a></li>
                                            <li><a href="{{ route('cours.index') }}">Formations</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contacter.index') }}" class="nav-link">Contact</a></li>
                                </ul>
                            </nav>

                            <!-- Pre-inscription Button -->
                            <div class="navbar_btn">
                                <a href="{{ route('preinscription.index') }}" class="btn_1">Se Préinscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Modal (Mobile Menu) -->
    <div id="mobileModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <nav class="modal-nav">
                <ul>
                    <li><a href="{{ route('accueil.index') }}" class="nav-link">Accueil</a></li>
                    <li><a href="{{ route('propos.index') }}" class="nav-link">À propos</a></li>
                    <li class="mega_menu_dropdown">
                        <a href="#" class="nav-link">Formation</a>
                        <ul>
                            <li><a href="{{ route('cours.cat') }}">Catégories</a></li>
                            <li><a href="{{ route('cours.index') }}">Formations</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contacter.index') }}" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- JavaScript to handle modal opening and closing -->
    <script>
        function openModal() {
            document.getElementById("mobileModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("mobileModal").style.display = "none";
        }

        // Close modal if clicked outside of modal content
        window.onclick = function(event) {
            if (event.target == document.getElementById("mobileModal")) {
                closeModal();
            }
        }
    </script>

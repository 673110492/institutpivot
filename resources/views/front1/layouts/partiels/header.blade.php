<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>pivot</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets1/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('assets1/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Spinner End -->

   <!-- Top Navbar with Social Media and Location -->
<div class="bg-light py-2 d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Social Media Icons -->
        <div>
            <a href="https://www.facebook.com" target="_blank" class="text-primary me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank" class="text-primary me-3"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" target="_blank" class="text-primary me-3"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" target="_blank" class="text-primary"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <!-- Location Info -->
        <div>
            <i class="fas fa-map-marker-alt me-2"></i> Yaoundé, Cameroun
        </div>
    </div>
</div>

<!-- Main Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <!-- Logo Section -->
    <a href="{{ route('accueil.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{ asset('img/logo_pivo.jpg') }}" alt="Institut LE PIVOT" class="logo-img me-3" style="width: 40px; height: 40px; object-fit: cover;">
        <h2 class="m-0 text-primary" style="font-family: 'Nunito', sans-serif;">LE PIVOT</h2>
    </a>

    <!-- Mobile Menu Toggle -->
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('accueil.index') }}" class="nav-item nav-link active">Accueil</a>
            <a href="{{ route('propos.index') }}" class="nav-item nav-link">À propos</a>
            <a href="{{ route('cours.cat') }}" class="nav-item nav-link">Catégories</a>
            <a href="{{ route('cours.index') }}" class="nav-item nav-link">Formations</a>
            <a href="{{ route('contacter.index') }}" class="nav-item nav-link">Contact</a>
            <a href="" class="nav-item nav-link">Actualiter</a>

            <!-- Dropdown Menu for Pages -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos specialité</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Developpement d'application</a>
                    <a href="testimonial.html" class="dropdown-item">Graphisme</a>
                    <a href="404.html" class="dropdown-item">Hotelerie</a>
                </div>
            </div>
        </div>

        <!-- Pre-inscription Button -->
        <a href="{{ route('preinscription.index') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
            Se Préinscrire <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>



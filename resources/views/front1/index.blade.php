@extends('front1.layouts.app')
@section('content')

<style>
    .formation {
        border: 1px solid #dce1e9;
        color: #7c8189;
        height: 50px;
        background-color: #dce1e9;
        padding: 0 20px;
        border-radius: 20px;
        float: inherit;
        font-weight: 300;

    }
</style>
<!-- slider part here -->
<div id="carouselExampleIndicators" class="carousel slide banner-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-overlay">
                <img src="{{ asset('assets1/img/dfdf.jpeg') }}" class="d-block w-100" alt="Banner 1">
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-overlay">
                <img src="{{ asset('assets1/img/IMG_6086.jpg') }}" class="d-block w-100" alt="Banner 2">
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-overlay">
                <img src="{{ asset('assets1/img/IMG_5601.jpg') }}" class="d-block w-100" alt="Banner 3">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>

<style>
    .banner-carousel .carousel-item img {
        max-height: 500px; /* Ajuste la hauteur de la bannière */
        object-fit: cover;
    }

    /* Overlay bleu transparent */
    .carousel-overlay {
        position: relative;
    }

    .carousel-overlay::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 255, 0.4); /* Bleu transparent */
        z-index: 1;
    }

    .carousel-overlay img {
        position: relative;
        z-index: 0;
    }
</style>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <section id="pourquoi-nous-choisir" class="section" style="padding: 50px 0; background: #f9f9f9;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; text-align: center;">
            <h2 class="section-title" style="font-size: 36px; font-weight: bold; color: #2c3e50; margin-bottom: 40px;">
                Pourquoi nous choisir ?
            </h2>
            <div class="cards-container" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">

                <!-- Carte 1 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="img/logo_pivo.jpg" alt="Bibliothèque moderne" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Bibliothèque moderne</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Notre bibliothèque est équipée de milliers de livres, de revues spécialisées et d'outils numériques pour enrichir vos connaissances.
                    </p>
                </div>

                <!-- Carte 2 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="avatar2.jpg" alt="Plateforme de E-learning" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Plateforme de E-learning</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Accédez à des cours interactifs et un suivi personnalisé via notre plateforme moderne d'apprentissage en ligne.
                    </p>
                </div>

                <!-- Carte 3 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="avatar3.jpg" alt="Encadrement personnalisé" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Encadrement personnalisé</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Bénéficiez d'un suivi personnalisé avec des séances de tutorat et de coaching adaptées à vos besoins académiques.
                    </p>
                </div>

                <!-- Carte 4 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="avatar4.jpg" alt="Séminaires et Formations" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Séminaires et Formations</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Participez à des séminaires et des ateliers dirigés par des experts pour acquérir des compétences pratiques.
                    </p>
                </div>

                <!-- Carte 5 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="avatar5.jpg" alt="Sport - Culture - Loisir" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Sport - Culture - Loisir</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Équilibrez vos études avec des activités sportives et culturelles pour un développement global et harmonieux.
                    </p>
                </div>

                <!-- Carte 6 -->
                <div class="card" style="background: #fff; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); max-width: 350px; padding: 30px; transition: transform 0.3s;">
                    <div class="card-avatar" style="margin-bottom: 20px;">
                        <img src="avatar6.jpg" alt="Réseautage Professionnel" style="width: 100px; height: 100px; border-radius: 50%;">
                    </div>
                    <h3 class="card-title" style="font-size: 24px; color: #34495e; margin-bottom: 15px;">Réseautage Professionnel</h3>
                    <p class="card-description" style="font-size: 16px; color: #7f8c8d; line-height: 1.6;">
                        Connectez-vous avec des professionnels et participez à des événements pour booster votre carrière.
                    </p>
                </div>

            </div>
        </div>
    </section>





    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ isset($about) ? url('storage/' . $about->photo) : 'img/about.jpg' }}" alt="About Us" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">{{ isset($about) ? $about->titre : 'Welcome to eLEARNING' }}</h1>
                    <p class="mb-4">{{ isset($about) ? $about->contenu : 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.' }}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Flexible Learning</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="assets1/img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="assets1/img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="assets1/img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="assets1/img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">FORMATIONS</h6>
                <h1 class="mb-5">NOS MODULE DE FORMATION</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($formations as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <a href="{{ route('cours.show', $item->id) }}">
                                    <img class="img-fluid" src="{{ isset($item->photo) ? url('storage/' . $item->photo) : 'assets1/img/default.jpg' }}" alt="{{ $item->nom }}" style="width: 100%; height: 250px; object-fit: cover;">
                                </a>
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="{{ route('cours.show', $item->id) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Lire Plus</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">S'inscrire</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="text-primary" style="font-weight: bold">{{ $item->nom }}</h5>
                                <p style="text-align:justify">{!! Str::limit($item->description, 100, '...') !!}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="icon_book_alt text-primary me-2"></i>+10 Modules</small>
                                <small class="flex-fill text-center border-end py-2"><i class="icon_profile text-primary me-2"></i>+120 Étudiants</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-star text-primary me-2"></i>5.0 (+100 Avis)</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Courses End -->


    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">ACTUALITER</h6>
        <h1 class="mb-5">NOS ACTUALITER REDENTE</h1>
    </div>
    <section class="about_us section_padding" style="background-color: #F5F5F5;">

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <!-- Image Section -->
                <div class="col-xl-5 col-md-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                    <div class="about_us_img position-relative">
                        <img src="{{ isset($actualite) ? url('storage/' . $actualite->photo) : '#' }}" alt="Image de présentation" class="img-fluid rounded shadow-sm">
                        <div class="about_tricker position-absolute bottom-0 start-0 p-3 bg-white rounded shadow">
                            <p class="mb-0 text-primary">Agréée <br><b style="font-size: 1.8em;">MINEFOP</b></p>
                        </div>
                        <img src="img/animated_icon/about_icon.png" alt="Icône" class="about_icon custom-animation position-absolute top-0 end-0">
                    </div>
                </div>

                <!-- Text Section -->
                <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                    <div class="about_us_details">
                        <h2 class="text-dark fw-bold mb-4">{{ isset($actualite->titre) ? $actualite->titre : 'À Propos De Nous' }}</h2>
                        <p class="text-secondary" style="text-align: justify; line-height: 1.8;">
                            {{ isset($actualite->message) ? $actualite->message : 'Notre vision' }}
                        </p>
                        <h4 class="mt-4"><span class="text-primary">Contacts :</span> +237 659218936 / institutpivot@gmail.com</h4>
                        <a href="{{ route('cours.index') }}" class="btn btn-primary mt-4">Voir les formations</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Shapes -->
        <img src="img/icon/about_shape_01.png" alt="Shape 1" class="about_sharp_1 position-absolute start-0 top-0">
        <img src="img/icon/about_shape_02.png" alt="Shape 2" class="about_sharp_2 custom-animation2 position-absolute end-0 top-50">
        <img src="img/icon/about_shape_03.png" alt="Shape 3" class="about_sharp_3 custom-animation3 position-absolute bottom-0 start-50">
    </section>



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                @foreach ($formateurs as $formateur)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ $formateur->avatar}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{ $formateur->noms}}</h5>
                            <small>{{ $formateur->email}}</small>
                        </div>
                    </div>
                </div>
                @endforeach

               
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="assets1/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="assets1/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="iassets1/imgmg/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="assets1/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection

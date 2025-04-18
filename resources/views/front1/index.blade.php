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
                <img src="{{ asset('assets1/img/IMG_5580.jpg') }}" class="d-block w-100" alt="Banner 1">
                <div class="carousel-caption">
                    <h3 class="text-white banner-heading">Formation en développement web</h3>
                    <p class="banner-description">Apprenez à développer des applications web performantes et sécurisées.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-overlay">
                <img src="{{ asset('assets1/img/IMG_6086.jpg') }}" class="d-block w-100" alt="Banner 2">
                <div class="carousel-caption">
                    <h3 class="text-white banner-heading">Formation en gestion de base de données</h3>
                    <p class="banner-description">Maîtrisez la gestion et l'optimisation des bases de données.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-overlay">
                <img src="{{ asset('assets1/img/IMG_5601.jpeg') }}" class="d-block w-100" alt="Banner 3">
                <div class="carousel-caption">
                    <h3 class="text-white banner-heading">Formation en cybersécurité</h3>
                    <p class="banner-description">Apprenez à protéger les systèmes informatiques contre les menaces.</p>
                </div>
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
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 10;
        color: white;
        padding: 0 15px;
    }

    .banner-heading {
        font-size: 2rem; /* taille de police par défaut */
    }

    .banner-description {
        font-size: 1rem; /* taille de police par défaut */
    }

    @media (max-width: 1200px) {
        .banner-heading {
            font-size: 1.75rem;
        }
        .banner-description {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 992px) {
        .banner-heading {
            font-size: 1.5rem;
        }
        .banner-description {
            font-size: 0.85rem;
        }
    }

    @media (max-width: 768px) {
        .banner-heading {
            font-size: 1.25rem;
        }
        .banner-description {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 576px) {
        .banner-heading {
            font-size: 1rem;
        }
        .banner-description {
            font-size: 0.75rem;
        }
    }
</style>


<style>
    .banner-carousel .carousel-item img {
        max-height: 700px; /* Augmente la hauteur de la bannière */
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

    /* Style pour les messages */
    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
        z-index: 2;
    }

    .carousel-caption h3 {
        font-size: 3rem; /* Augmenter la taille du texte */
        font-weight: bold; /* Mettre en gras */
    }

    .carousel-caption p {
        font-size: 1.5rem; /* Augmenter la taille du texte */
        font-weight: bold; /* Mettre en gras */
    }
</style>




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Formations certifiantes -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-certificate text-primary mb-4"></i>
                            <h5 class="mb-3">Formations Certifiantes</h5>
                            <p>Obtenez des certifications reconnues dans des domaines clés de l’informatique comme le développement web, la bureautique et le design graphique.</p>
                        </div>
                    </div>
                </div>

                <!-- Développement web -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-code text-primary mb-4"></i>
                            <h5 class="mb-3">Développement Web</h5>
                            <p>Apprenez à créer des sites et applications web dynamiques avec HTML, CSS, JavaScript, PHP, Laravel, et bien plus.</p>
                        </div>
                    </div>
                </div>

                <!-- Infographie et design -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-paint-brush text-primary mb-4"></i>
                            <h5 class="mb-3">Infographie & Design</h5>
                            <p>Maîtrisez les outils de création visuelle comme Photoshop, Illustrator et InDesign pour produire des visuels professionnels.</p>
                        </div>
                    </div>
                </div>

                <!-- Maintenance informatique -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-tools text-primary mb-4"></i>
                            <h5 class="mb-3">Maintenance Informatique</h5>
                            <p>Acquérez des compétences pratiques en réparation, installation de logiciels, assemblage et gestion de parcs informatiques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


<!-- Ajoute cette ligne dans ton <head> -->

    <section id="pourquoi-nous-choisir" class="section" style="padding: 60px 0; background: #f0f4f8;">
      <div class="container" style="max-width: 1200px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 36px; font-weight: bold; color: #1e3a8a; margin-bottom: 50px;">
          Pourquoi nous choisir ?
        </h2>
        <div class="cards-container" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">

          <!-- Carte 1 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-book-reader"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Bibliothèque moderne</h3>
            <p style="font-size: 15px; color: #475569;">
              Accédez à des milliers de livres, revues et ressources numériques pour enrichir vos connaissances.
            </p>
          </div>

          <!-- Carte 2 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-laptop-code"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Plateforme de E-learning</h3>
            <p style="font-size: 15px; color: #475569;">
              Suivez vos cours en ligne à votre rythme grâce à une plateforme intuitive et interactive.
            </p>
          </div>

          <!-- Carte 3 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-user-graduate"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Encadrement personnalisé</h3>
            <p style="font-size: 15px; color: #475569;">
              Profitez d’un suivi sur mesure avec des tuteurs engagés dans votre réussite.
            </p>
          </div>

          <!-- Carte 4 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Séminaires et formations</h3>
            <p style="font-size: 15px; color: #475569;">
              Renforcez vos compétences avec des sessions pratiques animées par des experts.
            </p>
          </div>

          <!-- Carte 5 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-futbol"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Sport - Culture - Loisir</h3>
            <p style="font-size: 15px; color: #475569;">
              Épanouissez-vous à travers des activités sportives, culturelles et récréatives.
            </p>
          </div>

          <!-- Carte 6 -->
          <div class="card" style="background: #fff; border-radius: 20px; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1); max-width: 340px; padding: 30px;">
            <div style="margin-bottom: 20px; font-size: 48px; color: #1e3a8a;">
              <i class="fas fa-network-wired"></i>
            </div>
            <h3 style="font-size: 22px; color: #1e293b; margin-bottom: 10px;">Réseautage professionnel</h3>
            <p style="font-size: 15px; color: #475569;">
              Développez votre réseau en rencontrant des professionnels et des anciens diplômés.
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
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ isset($about) ? url('storage/' . $about->photo) : 'img/about.jpg' }}" alt="Formation Professionnelle" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Formation Professionnelle</h6>
                    <h1 class="mb-4">{{ isset($about) ? $about->titre : 'Construisez votre avenir avec la formation professionnelle' }}</h1>
                    <p class="mb-4">
                        {{ isset($about) ? $about->contenu : 'Notre centre offre des formations professionnelles pratiques et adaptées aux besoins du marché. Que vous soyez jeune diplômé, en reconversion ou en quête de perfectionnement, nous vous accompagnons vers une insertion professionnelle réussie.' }}
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formateurs expérimentés</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formations certifiantes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Stages en entreprise</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Accompagnement à l’insertion</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="#">En savoir plus</a>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Témoignages</h6>
                <h1 class="mb-5">Ce que disent nos apprenants !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($temoignages as $temoignage)
                    @if($temoignage->statut)
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3"
                                 src="{{ asset('storage/' . $temoignage->photo) }}"
                                 alt="{{ $temoignage->nom }}"
                                 style="width: 80px; height: 80px;">
                            <h5 class="mb-0">{{ $temoignage->nom }}</h5>
                            <p>{{ $temoignage->fonction }}</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">{{ $temoignage->description }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <!-- Testimonial End -->

@endsection

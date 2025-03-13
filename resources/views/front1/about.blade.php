@extends('front1.layouts.app')
@section('content')

<section class="banner_section py-5" style="background: url('assets1/img/IMG_5703-2.jpg') no-repeat center center; background-size: cover; position: relative; height: 400px;">
    <!-- Couche bleue transparente au-dessus de l'image -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 255, 0.4);"></div>

    <div class="container text-center" style="position: relative; z-index: 1; padding-top: 100px;">
        <h2 style="font-size: 3rem; color: white;">Rejoignez Notre Communauté d'Apprenants</h2>
        <p style="font-size: 1.25rem; color: white;">Découvrez des formations de qualité, bénéficiez d'un apprentissage pratique et développez vos compétences avec des experts.</p>
    </div>
</section>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Instructeurs Qualifiés</h5>
                        <p>Notre équipe d'instructeurs est composée de professionnels expérimentés.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Cours en Ligne</h5>
                        <p>Suivez des cours de qualité depuis n'importe où avec nos plateformes en ligne.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Projets Pratiques</h5>
                        <p>Nos cours comprennent des projets pratiques pour une expérience d'apprentissage complète.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Bibliothèque de Ressources</h5>
                        <p>Accédez à une vaste bibliothèque de livres et de ressources pour compléter votre apprentissage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner Section -->

<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{isset($about) ? url('storage/' . $about->photo) : 'img/about.jpg'}}" alt="A propos" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">À propos de nous</h6>
                <h1 class="mb-4">{{isset($about->titre) ? $about->titre : "Bienvenue sur notre plateforme d'apprentissage"}}</h1>
                <p class="mb-4" style="text-align: justify;">
                    {{isset($about->contenu) ? $about->contenu : "Nous sommes un institut de formation spécialisé dans le domaine informatique, offrant des cours en ligne et en présentiel."}}
                </p>
                <p class="mb-4" style="text-align: justify;">
                    Notre objectif est de fournir une formation de qualité qui prépare nos apprenants à exceller dans le monde professionnel.
                </p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Instructeurs Qualifiés</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cours en Ligne</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certificat International</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Projets Pratiques</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('cours.index')}}">Voir nos formations</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection

@extends('front1.layouts.app')

@section('content')

    <!-- Section Bannière -->
    <section class="banner_section py-5" style="background: url('assets1/img/IMG_5703-2.jpg') no-repeat center center; background-size: cover; position: relative; height: 400px;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 255, 0.4);"></div>

        <div class="container text-center" style="position: relative; z-index: 1; padding-top: 100px;">
            <h2 style="font-size: 3rem; color: white;">Rejoignez Notre Communauté d'Apprenants</h2>
            <p style="font-size: 1.25rem; color: white;">Découvrez des formations de qualité, bénéficiez d'un apprentissage pratique et développez vos compétences avec des experts.</p>
        </div>
    </section>

    <!-- Section Fil d'Ariane -->
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="breadcrumb_iner">
                        <h2>Catégories de formations</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{ route('accueil.index') }}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Formations</span>
                            <i class="arrow_carrot-right"></i>
                            <span>Catégories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catégories de Formation -->
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_blog_details">
                        <div data-aos="fade-up" data-aos-duration="1000" class="blog_details_content container">
                            <h1>Catégories de formation</h1>

                            @foreach($types as $item)
                                <div class="mt-3 p-3" style="border: 1px solid blue; border-radius: 8px;">
                                    <h2 class="text-primary">{{ $item->nom }}</h2>
                                    <p style="text-align: justify;">{{ $item->description }}</p>
                                    <a href="{{ route('cours.index') }}" class="btn cat" style="border: 1px solid blue;">Voir les formations</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

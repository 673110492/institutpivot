@extends('front1.layouts.app')

@section('content')
    <!-- Section Breadcrumb -->
    <section class="breadcrumb_part blog_grid_bg mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="breadcrumb_iner text-center">
                        <h2>Détails de la Formation</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{ route('accueil.index') }}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Formations</span>
                            <i class="arrow_carrot-right"></i>
                            <span>{{ $formation->nom }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Détails de la Formation -->
    <section class="blog_page section_padding mt-5">
        <div class="container">
            <div class="row">
                <!-- Contenu principal -->
                <div class="col-lg-8">
                    <div class="single_blog_details">
                        <div data-aos="fade-up" data-aos-duration="1000" class="blog_details_content">
                            <img src="{{ isset($formation) ? url('storage/' . $formation->photo) : '#' }}"
                                 alt="Image de la formation"
                                 class="img-fluid rounded mb-4 w-100">

                            <h2 class="text-primary">{{ $formation->nom }}</h2>
                            <p style="text-align: justify;">{{ $formation->description }}</p>

                            <!-- Tableau des catégories -->
                            <div class="table-responsive mt-4">
                                <table class="table table-bordered text-center">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Catégorie</th>
                                            <th>Prix</th>
                                            <th>Durée minimale</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($formation->types as $item)
                                            <tr>
                                                <td>{{ $item->nom }}</td>
                                                <td>{{ number_format($item->prix, 0, ',', ' ') }} FCFA</td>
                                                <td>{{ $item->duree }} mois</td>
                                                <td>
                                                    <a href="{{ route('preinscription.index') }}" class="btn btn-primary w-100">Se préinscrire</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Barre latérale -->
                <div class="col-lg-4">
                    <div class="blog_sidebar right-sidebar">
                        <!-- Formulaire de recherche -->
                        <div data-aos="fade-up" data-aos-duration="1200" class="single_sidebar mb-4">
                            <form action="#" class="search_form">
                                <input type="text" name="search" placeholder="Rechercher..." class="form-control">
                                <button type="submit" class="btn btn-primary mt-2 w-100">Chercher</button>
                            </form>
                        </div>

                        <!-- Autres formations -->
                        <div data-aos="fade-up" data-aos-duration="1400" class="single_sidebar">
                            <h3 class="mb-4">Autres Formations</h3>
                            @foreach($formations as $item)
                                <div class="single_sidebar_post d-flex mb-3">
                                    <img src="{{ isset($item) ? url('storage/' . $item->photo) : '#' }}"
                                         alt="{{ $item->nom }}"
                                         class="img-fluid rounded"
                                         width="80" height="80">
                                    <div class="sidebar_post_content ms-3">
                                        <h4><a href="{{ route('cours.show', $item->id) }}" class="text-primary">{{ $item->nom }}</a></h4>
                                        <p>{{ number_format($item->prix, 0, ',', ' ') }} FCFA</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

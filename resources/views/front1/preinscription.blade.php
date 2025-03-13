@extends('front1.layouts.app')
@section('content')

<!-- Carousel Banner -->
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
        max-height: 400px; /* Ajuste la hauteur de la bannière */
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


<!-- Breadcrumb -->
<section class="breadcrumb_part blog_grid_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb_iner">
                    <h2>Préinscriptions</h2>
                    <div class="breadcrumb_iner_link">
                        <a href="{{ route('accueil.index') }}">Accueil</a>
                        <i class="arrow_carrot-right"></i>
                        <span>Préinscriptions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Document Requirements -->
<div class="review_form contact_form section_padding">
    <div class="container">
        <h3 class="text-primary mb-4">Pièces constitutives du dossier physique</h3>
        <div class="card border-primary mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <p><b>1. Demande d’admission adressée au directeur du Pivot</b></p>
                        <p><b>2. Fiche d'inscription dûment remplie</b> <a href="{{ isset($file) ? url('storage/' . $file->photo) : '#' }}" download="fiche_inscription.pdf" class="btn btn-primary">Télécharger ici</a></p>
                        <p><b>3. 01 photocopie de l'acte de naissance</b></p>
                        <p><b>4. 04 demi-cartes photo 4*4</b></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <p><b>5. Photocopie du dernier diplôme requis ou équivalent</b></p>
                        <p><b>6. 02 enveloppes A4</b></p>
                        <p><b>7. Certificat médical</b></p>
                        <p><b>8. Frais de dépôt de dossier : 3000f</b></p>
                        <p><b>9. Reçu de versement des frais d'inscription : 30000f</b></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pre-inscription Form -->
        <h3 class="text-primary mb-4">Préinscription</h3>
        <form method="POST" action="{{ route('preinscription.store') }}" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="nom" value="{{ old('nom') }}" class="form-control" placeholder="Nom">
                </div>

                <div class="col-md-6 mb-3">
                    <input type="text" name="prenom" value="{{ old('prenom') }}" class="form-control" placeholder="Prénom">
                </div>

                <div class="col-md-6 mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>

                <div class="col-md-6 mb-3">
                    <input type="number" name="telephone" value="{{ old('telephone') }}" class="form-control" placeholder="Téléphone">
                </div>

                <div class="col-md-6 mb-3">
                    <select name="sexe" class="form-control">
                        <option value="" disabled selected>Choisir votre sexe</option>
                        <option value="F" {{ old('sexe') == 'F' ? 'selected' : '' }}>Féminin</option>
                        <option value="M" {{ old('sexe') == 'M' ? 'selected' : '' }}>Masculin</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <select name="type_formation_id" class="form-control">
                        <option value="" disabled selected>Choisir le type de formation</option>
                        @foreach ($type_formations as $item)
                            <option value="{{ $item->id }}" {{ old('type_formation_id') == $item->id ? 'selected' : '' }}>{{ $item->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

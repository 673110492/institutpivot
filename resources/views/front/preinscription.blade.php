@extends('front1.layouts.app')
@section('content')
    <section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
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
    <!-- breadcrumb part end -->

    <!-- Start contact us -->
    <div class="review_form contact_form section_padding">
        <div class="container">
            <h3 data-aos="fade-up" data-aos-duration="1200" class="text-primary">Pieces constitutifs du dossier physique
            </h3>
            <div class="card" style="border: 1px solid blue;">
                <div class="card-body">
                    <div class="row">
                        <p class="col-md-12"><b style="font-size: 1.4em;">1 - Demande d’admission adressée au directeur du
                                pivot mentionnant la formation sollicitée</b></p>
                        <p class="col-md-12"><b style="font-size: 1.4em;">2 - Une fiche d’inscription durement rempli,
                                fourni par l’administration ou <a
                                    href="{{ isset($file) ? url('storage/' . $file->photo) : '#' }}" id="downloadLink"
                                    download="fiche_inscription.pdf" class="btn btn-primary">Telecharger ici </a></b> </p>
                        <p class="col-md-12"><b style="font-size: 1.4em;">5 - 01 photocopie du dernier diplôme requis /
                                dernier diplôme obtenu / équivalant </b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">3 - 01 photocopie de l’acte de naissance </b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">4 - 04 demi-cartes photo 4*4</b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">6 - 02 enveloppes A4</b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">7 - Certificat médical</b> </p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">8 - Frais de dépôt de dossier <b>3000f</b></b> </p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">9 - Reçu de versement des frais d'inscription
                                <b>(30000f)</b></b></p>
                    </div>
                </div>
            </div>
            <h3 data-aos="fade-up" data-aos-duration="1200" class="mt-5 text-primary">PREINSCRIPTION</h3>
            <div class="" style="border: 1px solid blue;">
                <form method="POST" action="{{ route('preinscription.store') }}" accept-charset="UTF-8"
                    class="form-horizontal container" enctype="multipart/form-data" data-aos="fade-up"
                    style="background-color: #f9f9f9; padding: 3rem;" data-aos-duration="1600">
                    @csrf

                    <!-- Affichage des erreurs de validation -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group mb-4">
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"
                            placeholder="Nom" value="{{ old('nom') }}"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                            placeholder="Prénom" value="{{ old('prenom') }}"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                        @error('prenom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <select class="form-control @error('sexe') is-invalid @enderror" name="sexe"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                            <option disabled value="" selected>Choisir votre sexe</option>
                            <option value="F" {{ old('sexe') == 'F' ? 'selected' : '' }}>Féminin</option>
                            <option value="M" {{ old('sexe') == 'M' ? 'selected' : '' }}>Masculin</option>
                        </select>
                        @error('sexe')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Email" value="{{ old('email') }}"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                            placeholder="Télephone" value="{{ old('telephone') }}"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                        @error('telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <select onchange="change()" class="form-control @error('type_formation_id') is-invalid @enderror"
                            name="type_formation_id"
                            style="border-radius: 10px; padding: 1rem; border: 1px solid #007bff; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0, 123, 255, 0.2);">
                            <option value="" disabled {{ old('type_formation_id') ? '' : 'selected' }}>Choisir le
                                type de formation</option>
                            @foreach ($type_formations as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('type_formation_id') == $item->id ? 'selected' : '' }}>{{ $item->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_formation_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="submit" class="btn btn-primary btn-block" value="Envoyer"
                            style="border-radius: 10px; padding: 1rem; transition: background-color 0.3s ease; background-color: #007bff; color: white;">
                    </div>
                </form>
            </div>

        </div>
            <img src="{{ asset('assets1/img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2') }}">
            <img src="{{ asset('assets1/img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3') }}">
            <img src="{{ asset('assets1/img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4') }}">
            <img src="{{ asset('assets1/img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5') }}">
    @endsection
    <script>
        // Si vous souhaitez effectuer le téléchargement avec JavaScript sans recharger la page
        document.getElementById('downloadLink').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
            var link = this.href; // Récupère l'URL du fichier

            // Créer un élément <a> temporaire pour le téléchargement
            var a = document.createElement('a');
            a.href = link;
            a.download = 'fiche_inscription.pdf'; // Assurez-vous de définir un nom de fichier

            // Ajoutez l'élément à la page et déclenchez le téléchargement
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
        function change() {
            let type = document.getElementById('type_formation_id').value;
            let form = document.getElementById('form');

            $.ajax({
                url: "preinscription/search_formation/" + type,
                type: 'GET',
                data: [],
                success: function(data) {
                    let out = "";
                    for (i = 0; i < data.length; i++) {
                        out = out + `<option value="${data[i].id}"> ${data[i].nom} </option>`;
                    }
                    form.innerHTML = out;
                },
                error: function(data) {
                    console.log('error', data);
                }
            });
        }
    </script>

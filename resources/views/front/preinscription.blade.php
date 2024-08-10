@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Préinscriptions</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
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
            <h3 data-aos="fade-up" data-aos-duration="1200" class="text-primary">Pieces constitutifs du dossier physique</h3>
            <div class="card" style="border: 1px solid blue;">
                <div class="card-body">
                    <div class="row">
                        <p class="col-md-12"><b style="font-size: 1.4em;">1 - Demande d’admission adressée au directeur de 3iA mentionnant la formation sollicitée</b></p>
                        <p class="col-md-12"><b style="font-size: 1.4em;">2 - Une fiche d’inscription durement rempli, fourni par l’administration ou <a href="{{ asset('storage/' . $file->photo) }}" id="downloadLink" download="fiche_inscription.pdf" class="btn btn-primary">Telecharger ici </a></b> </p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">3 - 01 photocopie de l’acte de naissance </b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">4 - 04 demi-cartes photo 4*4</b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">5 - 01 photocopie du dernier diplôme obtenu </b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">6 - Certificat médical</b> </p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">7 - Frais de préinscription 15000f </b></p>
                        <p class="col-md-6"><b style="font-size: 1.4em;">7 - Frais de dépôt de dossier 3000f</b> </p>
                    </div>
                </div>
            </div>
            <h3 data-aos="fade-up" data-aos-duration="1200" class="mt-5 text-primary">PREINSCRIPTION</h3>
            <div class=""  style="border: 1px solid blue;">
            <form  method="POST" action="{{ route('preinscription.store') }}" accept-charset="UTF-8" class="form-horizontal container" enctype="multipart/form-data" data-aos="fade-up" style="background-color : #E3E3E3; padding-top:3%; padding-bottom:3%;" data-aos-duration="1600" method="post">
                            {{ csrf_field() }}
                    <div class="">
                        <div class="form_single_item">
                            <input style="border: 1px solid blue;" type="text" class="bg-white" name="nom" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form_single_item">
                            <input style="border: 1px solid blue;" type="text" class="bg-white" name="prenom" placeholder="Prénom" required>
                        </div>
                    </div>
                    <div class=""> 
                        <div class="form_single_item">
                        <select style="border: 1px solid blue;" class="bg-white" name="sexe" id="">
                            <option disabled value="" selected>Choisir votre sexe</option>
                            <option value="F" @if( isset($pre_inscriptions) && $pre_inscriptions->sexe == "F") selected @endif>Féminin</option>
                            <option value="M" @if( isset($pre_inscriptions) && $pre_inscriptions->sexe == "M") selected @endif>Masculin</option>
                        </select>
                        </div>
                    </div>
                    <div class="">
                        <div class="form_single_item">
                            <input style="border: 1px solid blue;" type="email" class="bg-white" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form_single_item">
                            <input style="border: 1px solid blue;" type="number" class="bg-white" name="telephone" placeholder="Télephone" required>
                        </div>
                    </div>
                    <div class="form_single_item">
                        <select style="border: 1px solid blue;" onchange="change()" class="bg-white" name="type_formation_id" id="type_formation_id" class="form-select">
                            <option value="" disabled selected>Choisir le type de formation</option>
                            @foreach($type_formations as $item)
                            <option value="{{$item->id}}" @if( isset($pre_inscriptions) && $item->id == $pre_inscriptions->type_formation_id) selected @endif>
                                {{$item->nom}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form_single_item">
                        <select style="border: 1px solid blue;" name="formation_id" class="bg-white" id="form" class="form-select">
                            <option value="" disabled selected>Choisir la formation</option>

                        </select>
                    </div>
                    <input type="submit" class="btn_3" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
        <!-- <img src="{{asset('img/icon/shape_06.png" alt="#" class="about_sharp_1 custom-animation')}}">
        <img src="{{asset('img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2')}}">
        <img src="{{asset('img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3')}}">
        <img src="{{asset('img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4')}}">
        <img src="{{asset('img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5')}}"> -->
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
    function change(){
        let type = document.getElementById('type_formation_id').value;
        let form = document.getElementById('form');

        $.ajax({
            url:"preinscription/search_formation/"+type,
            type:'GET',
            data:[],
            success:function(data){
                let out = "";
                for(i=0; i < data.length;i++){
                    out = out + `<option value="${data[i].id}"> ${data[i].nom} </option>`;
                }
                form.innerHTML = out;
            },
            error:function(data){
                console.log('error',data);
            }
        });
    }
</script>

@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion des Pré-Inscription</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Ajout d'un pré-inscrit</p>
            </div>
            <br>
            <div class="col-12">
                @if ($errors->any())
                <ul class="alert alert-danger" style="padding-left: 10px">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="card">
<div class="card-header bg-light">
    <div class="row">
        <h4 class="col-md">Ajout d'un pré-inscrit</h4>
        <div class="d-flex align-items-center justify-content-end col-md">
            <div id="bulk-select-replace-element" style="margin-right: 20px">
                <a href="{{route('pre_inscription.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('pre_inscription.store')}}" method="POST" accept-charset="UTF-8"
class="form-horizontal" >
    @csrf
 @include('admin.pre_inscriptions.form')

<div class="card-footer">
    <center>
        <button class="btn btn-danger m-3" type="reset">Annuler</button>
        <button class="btn btn-success m-3" type="submit">Ajouter</button>
    </center>
</form>
</div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>

// let paysPlaceholder = document.getElementById('pays');
// let villePlaceholder = document.getElementById('ville');
let formationDropdown = document.getElementById('formation_id');
console.log("ErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreur");

function formation_change(){
    console.log("ErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreurErreur")
    // villePlaceholder.innerHTML = "";
    // paysPlaceholder.innerHTML = "";


    // $.ajax({
    //         url:"search_type/"+type,
    //         type:'GET',
    //         data:[],
    //         success:function(data){
    //                 console.log(data)
    //                 duree.value = data[0];
    //         },
    //         error:function(data){
    //             console.log('error',data);
    //         }

    //     });

    $.ajax({
        url:"search_type/"+type,
        type:'GET',
        data:[],
        success:function(data){
            formations = data[]
            let out = "";
            out += `<option value=""> Choisir la formation </option>`;
            for(let formationDropdown of formations){
                out += `<option value="${formationDropdown}"> ${formationDropdown} </option>`;
            }
            formationDropdown.innerHTML = out;
            formationDropdown.disabled = false;
        },
        error:function(data){
            console.log('error',data);
        }
    });

//     fetch("payss.json")
//     .then(function(responce){
//         return responce.json();
//     }).then(function(data){
//         let villes = data[pays];
//         let out = "";
//         out += `<option value=""> Choisir la ville </option>`;
//         for(let ville of villes){
//             out += `<option value="${ville}"> ${ville} </option>`;
//         }
//         villesDropdown.innerHTML = out;
//         villesDropdown.disabled = false;
//         paysPlaceholder.innerHTML = pays;
//     });

}

// function getVille(ville){
//     return villePlaceholder.innerHTML = ville;
// }
</script>



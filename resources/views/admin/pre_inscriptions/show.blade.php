@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion des Etudiant</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Detail d'une Etudiant</p>
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
<div class="card mb-4">
    <h5 class="card-header">Détail de l'Etudiant :  <span class="text-primary">{{ $pre_inscriptions->nom }}</span>
    </h5>
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <div class="button-wrapper">
                <div>
                    <h5 class=""><span>Nom de l'Etudiant : </span><b class="text-success">{{ $pre_inscriptions->nom}}<b></h5>
                    <h5 class=""><span>Prenom de l'Etudiant : </span><b class="text-success">{{ $pre_inscriptions->prenom}}<b></h5>
                    <h5 class=""><span>Sexe de l'Etudiant : </span><b class="text-success">{{ $pre_inscriptions->sexe}}<b></h5>
                    <h5 class=""><span>Email de l'Etudiant : </span><b class="text-success">{{ $pre_inscriptions->email}}<b></h5>
                    <h5 class=""><span>Telephone de l'Etudiant : </span><b class="text-success">{{ $pre_inscriptions->telephone}}<b></h5>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="mt-2">
                <div class="d-flex align-items-center justify-content-end">
                    <div id="bulk-select-replace-element" style="margin-right: 20px">
                        <a href="{{route('pre_inscription.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
                        <a href="{{ route('pre_inscription.edit', $pre_inscriptions->id) }}">
                            <button class="btn  btn-success" title="Détail d'un personnel"
                                type="button"><i class="fa fa-pen"></i> Modifier</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

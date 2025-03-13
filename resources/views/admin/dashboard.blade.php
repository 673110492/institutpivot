@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Statistiques générales</h2>

    <marquee behavior="scroll" direction="left" class="mb-4 fs-4 fw-bold">Bienvenue à l'Institut de Formation Le Pivot</marquee>

    <div class="row">

        <!-- Carte 1 : Nombre d'utilisateurs -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">INSCRIPTION</h5>
                <p class="card-text fs-2">{{$preinscription}}</p>
            </div>
        </div>

        <!-- Carte 2 : Nombre de produits -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">FORMATION</h5>
                <p class="card-text fs-2">{{$formation}}</p>
            </div>
        </div>

        <!-- Carte 3 : Nombre de commandes -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">TYPE DE FORMATION</h5>
                <p class="card-text fs-2">{{$type}}</p>
            </div>
        </div>

        <!-- Carte 4 : Nombre de catégories -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">Catégories</h5>
                <p class="card-text fs-2">34</p>
            </div>
        </div>

        <!-- Carte 5 : Nombre d'administrateurs -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">Administrateurs</h5>
                <p class="card-text fs-2">22</p>
            </div>
        </div>

        <!-- Carte 6 : Nombre de paiements -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center p-4">
                <h5 class="card-title">Paiements</h5>
                <p class="card-text fs-2">12</p>
            </div>
        </div>

    </div>
</div>
@endsection

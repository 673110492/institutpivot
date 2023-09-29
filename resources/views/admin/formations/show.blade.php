@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion des formations</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Detail d'une formation</p>
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
    <h5 class="card-header">Détail de la formation :  <span class="text-primary">{{ $formation->nom }}</span>
    @if ($formation->statut == true)
        <small class="badge rounded-pill bg-success float-end"><i class='fa fa-bullseye'></i></small>
    @else
        <small class="badge rounded-pill bg-danger float-end"><i class='fa fa-low-vision'></i></small>
    @endif</h5>
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <a href="{{ url('name/' . $formation->photo) }}" class="glightbox2"
                data-glightbox='title:Description Bottom; description: You can set the position of the description &lt;a href="http://google.com"&gt;with a link to Google&lt;/a&gt;'>
            <img src="{{ url('name/' . $formation->photo) }}" alt="user-avatar" class="d-block rounded" height="200"
                width="200" id="uploadedAvatar" />
            </a>
            <div class="button-wrapper">
                <div>
                    <h5 class=""><span>Nom de la formation : </span><b>{{ $formation->nom}}<b></h5>
                    <h5 class=""><span>Prix de la formation : </span><b>{{ $formation->prix}} XAF<b></h5>
                    <h5 class=""><span>Duree de la formation : </span><b>{{ $formation->duree}}<b></h5>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="mt-2">
                <div class="widget-content-left">
                    <h3>
                        <div class="text-primary opacity-8">Description de la formation</div>
                    </h3>
                    <div class="widget-heading opacity-8">
                        <span class="">{!!$formation->description!!}</span>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <div id="bulk-select-replace-element" style="margin-right: 20px">
                        <a href="{{route('formation.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
                        <a href="{{ route('formation.edit', $formation->id) }}">
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

@extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion des types de  formations</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Modification d'un type formation</p>
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
        <h4 class="col-md">Modification d'une formation</h4>
        <div class="d-flex align-items-center justify-content-end col-md">
            <div id="bulk-select-replace-element" style="margin-right: 20px">
                <a href="{{route('type_formation.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('type_formation.update',$type_formation->id)}}" method="POST" accept-charset="UTF-8"
    class="form-horizontal" enctype="multipart/form-data">
    @csrf
 @include('admin.type_formations.form')

<div class="card-footer">
    <center>
        <a class="btn btn-danger m-3" href="{{route('type_formation.edit',$type_formation->id)}}">Annuler</a>
        <button class="btn btn-success m-3" type="submit">Modifier</button>
    </center>
</form>
</div>
</div>
@endsection



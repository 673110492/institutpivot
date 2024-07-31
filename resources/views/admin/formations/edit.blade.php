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
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Modification d'une formation</p>
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
                <a href="{{route('formation.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('formation.update',$formation->id)}}" method="POST" accept-charset="UTF-8"
    class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <input class="form-control" required id="nom" name="nom" type="text"
                        value="{{ isset($formation->nom) ? $formation->nom : old('nom') }}"
                        placeholder="Expert formation" />
                    <label for="nom">{{ __('Nom de la formation') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('nom', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input accept=".jpeg,.png,.jpg" class="form-control" id="photo" name="photo" type="file"
                        value="{{ isset($formation->photo) ? $formation->photo : old('photo') }}"
                        placeholder="(237) XXX XX XX XX" />
                    <label for="photo">Photo descriptive<span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('photo', '<p class="help-block">:message</p>') !!}</span>
                </div>
                <div class="mb-3">
                    <label for="ville">{{ __('Description de la formation') }} <span style="color:red">*</span></label>
                    <textarea class="form-control" rows="10" required name="description" type="description" value="">{{ isset($formation->description) ? $formation->description : old('description') }}</textarea>
                    <span style="color: red">{!! $errors->first('description', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
    </div>
    </div>

<div class="card-footer">
    <center>
        <a class="btn btn-danger m-3" href="{{route('formation.edit',$formation->id)}}">Annuler</a>
        <button class="btn btn-success m-3" type="submit">Modifier</button>
    </center>
</form>
</div>
</div>
@endsection



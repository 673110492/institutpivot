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
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Modification des modalite de la formation</p>
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
        <h4 class="col-md">Modification des modalite de la formation <span class="text-primary">{{$type->formation->nom}}</span> en <span class="text-primary">{{$type->type->nom}}</span></h4>
        <div class="d-flex align-items-center justify-content-end col-md">
            <div id="bulk-select-replace-element" style="margin-right: 20px">
                <a href="{{route('formation.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('formation.updatetype',$type->id)}}" method="POST" accept-charset="UTF-8"
    class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="card-body bg-white">
    <div class="tab-content">
                <div class="form-floating mb-3">
                    <select onchange="duree_change()" disabled name="type_formation_id" id="type_formation_id" class="form-select">
                        <option value="" disabled selected>Choisir le type de formation</option>
                        @foreach($type_formations as $item)
                        <option value="{{$item->id}}" @if( isset($type) && $item->id == $type->type_formation_id) selected @endif>
                            {{$item->nom}}
                        </option>
                        @endforeach
                    </select>
                    <label for="type_formation_id" class="control-label">{{ 'Type de formation' }}<span style="color:red">*</span></label>
                    {!! $errors->first('type_formation_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-floating mb-3">
                    <input value="{{ isset($type->duree) ? $type->duree : old('duree') }}" class="form-control" id="duree" name="duree" required type="duree" />
                    <label for="ville">{{ __('Duree minimale') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('duree', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
                <div class="form-floating mb-3">
                    <input value="{{ isset($type->prix) ? $type->prix : old('prix') }}" class="form-control" id="prix" required name="prix" type="number"/>
                    <label for="ville">{{ __('Prix en fonction du type') }} <span style="color:red">*</span></label>
                    <span style="color: red">{!! $errors->first('prix', '<p class="help-block">:message</p>')
                        !!}</span>
                </div>
    </div>
    </div>
<div class="card-footer">
    <center>
        <a class="btn btn-danger m-3" href="{{route('formation.edittype',$type->id)}}">Annuler</a>
        <button class="btn btn-success m-3" type="submit">Modifier</button>
    </center>
</form>
</div>
</div>
@endsection



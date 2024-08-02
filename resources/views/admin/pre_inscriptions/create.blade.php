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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
    function change(){
        let type = document.getElementById('type_formation_id').value;
        let form = document.getElementById('form');

        $.ajax({
            url:"search_formation/"+type,
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
@endsection

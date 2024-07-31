


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
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Ajout d'une formation</p>
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
        <h4 class="col-md">Ajout d'une nouvelle formation</h4>
        <div class="d-flex align-items-center justify-content-end col-md">
            <div id="bulk-select-replace-element" style="margin-right: 20px">
                <a href="{{route('formation.index')}}" class="btn btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>
    </div>
</div>
<form action="{{route('formation.store')}}" method="POST" accept-charset="UTF-8"
class="form-horizontal" enctype="multipart/form-data">
    @csrf
 @include('admin.formations.form')

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
<script defer>

    function duree_change(){
     let duree = document.getElementById('duree');
     let type = document.getElementById('type_formation_id').value;
            $.ajax({
            url:"search_type/"+type,
            type:'GET',
            data:[],
            success:function(data){
                    console.log(data)
                    duree.value = data[0];
            },
            error:function(data){
                console.log('error',data);
            }

        });
    }


    function soumettre(){
        let prix = document.getElementById('prix');
        let duree = document.getElementById('duree');
        let type = document.getElementById('type_formation_id').value;
        let table = document.getElementById('tet');
        if(type != 0 && duree.value != 0 && prix.value != 0){
            $.ajax({
                url:"ajout_type/"+type+"/"+duree.value+"/"+prix.value,
                type:'GET',
                data:[],
                success:function(data){
                        duree.value=0;
                        prix.value=0;
                        let t="";
                        console.log(data);
                        for(i=0; i< data.length;i++){
                            t = t +  "<tr><td>"+data[i].nom+"</td>"+
                                                "<td>"+data[i].duree+"</td>"+
                                                "<td>"+data[i].prix+"</td>"+
                                                "<td><p class='btn btn-danger' onclick='supprimer("+data[i].id+")'><i class='fa fa-trash'></i></p></td>"+
                                                "</tr>";

                        }
                        table.innerHTML = t;
                },
                error:function(data){
                    console.log('error',data);
                }

            });
     }
    }
    function supprimer(supp){
        let table = document.getElementById('tet');
        $.ajax({
            url:"supp_type/"+supp,
            type:'GET',
            data:[],
                success:function(data){
                        let t="";
                        for(i=0; i< data.length;i++){
                            t = t +  "<tr><td>"+data[i].nom+"</td>"+
                                                "<td>"+data[i].duree+"</td>"+
                                                "<td>"+data[i].prix+"</td>"+
                                               "<td><p class='btn btn-danger' onclick='supprimer("+data[i].id+")'><i class='fa fa-trash'></i></p></td>"+
                                                "</tr>";

                        }
                        table.innerHTML = t;
                },
                error:function(data){
                    console.log('error',data);
                }

            });
    }

</script>



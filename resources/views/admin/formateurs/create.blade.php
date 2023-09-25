<div class="tab-content">
    <div class="tab-pane preview-tab-pane active" role="tabpanel"
        aria-labelledby="tab-dom-4a96aa7b-edb2-42d9-b6da-566710bb514a" id="dom-4a96aa7b-edb2-42d9-b6da-566710bb514a">
        <div class="modal fade" id="ajoutFormateur" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="staticBackdropLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">

                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="ajoutAbonnement">Ajouter un nouveau formateur</h4>
                            {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                        </div>


                        <form method="POST" action="{{ route('formateur.store') }}" accept-charset="UTF-8"
                            class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                @include('admin.formateurs.form')
                                <center>
                                    <button class="btn btn-danger m-3" type="reset"
                                        data-bs-dismiss="modal">Annuler</button>
                                    <button class="btn btn-success m-3" type="submit">Ajouter</button>
                                </center>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @extends('admin.layouts.app')
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion des formateurs</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Ajout d'un formateur</p>
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
    <h4>Ajout d'un nouveau formateur</h4>
</div>
<form action="{{route('formateur.store')}}" method="POST">
    @csrf
 @include('admin.formateurs.form')

<div class="card-footer">
    <center>
        <button class="btn btn-danger m-3" type="reset">Annuler</button>
        <button class="btn btn-success m-3" type="submit">Ajouter</button>
    </center>
</form>
</div>
</div>
@endsection --}}

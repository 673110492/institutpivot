<div class="modal fade" id="editFormateur{{ $formateur->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="editFormateur{{ $formateur->id }}Label">Modification d'un formateur
                    </h4>
                    {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                </div>


                <form method="POST" action="{{ route('formateur.update', $formateur->id) }}" accept-charset="UTF-8"
                    class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include('admin.formateurs.form')
                    <center>
                        <button class="btn btn-falcon-danger m-3" type="reset" data-bs-dismiss="modal">Annuler</button>
                        <button class="btn btn-falcon-success m-3" type="submit">Modifier</button>
                    </center>
                </form>

            </div>
        </div>
    </div>
</div>

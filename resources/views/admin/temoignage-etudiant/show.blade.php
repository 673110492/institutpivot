<div class="modal fade" id="detailtemoignage{{ $temoignage->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="detailtemoignage{{ $temoignage->id }}Label">Detail d'un temoignage
                    </h4>
                    {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                </div>
                    <h5 class="card-header">Détail du témoignage #{{ $temoignage->id }}
                    @if ($temoignage->statut == true)
                        <small class="badge rounded-pill bg-success float-end"><i class='fa fa-bullseye'></i></small>
                    @else
                        <small class="badge rounded-pill bg-danger float-end"><i class='fa fa-low-vision'></i></small>
                    @endif</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ url('name/' . $temoignage->photo) }}" alt="user-avatar" class="d-block rounded" height="150"
                                width="150" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <div>
                                    <h3 class="">{{ $temoignage->nom }}</h3>
                                    <h6 class="menu-header-subtitle"><span class="text-primary">Formation :
                                        </span>{{ $temoignage->formation->nom }}</h6>
                                    <h6 class="menu-header-subtitle"><span class="text-primary">Fonction :
                                        </span>{{ $temoignage->fonction }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div>
                                <div class="widget-content-left">
                                    <h4 class="">
                                        <div class="text-primary opacity-8">Message du redacteur</div>
                                    </h4>
                                    <div class="widget-heading opacity-8">
                                        <span class="">{{ $temoignage->description }}</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>

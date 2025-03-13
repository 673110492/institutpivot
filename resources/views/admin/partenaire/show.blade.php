<div class="modal fade" id="detailpropos{{ $partenaire->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="detailpropos{{ $partenaire->id }}Label">Détail des informations</h4>
                </div>

                <h5 class="card-header">Détail des informations #{{ $partenaire->id }}
                    @if ($partenaire->statut == true)
                        <small class="badge rounded-pill bg-success float-end"><i class='fa fa-bullseye'></i></small>
                    @else
                        <small class="badge rounded-pill bg-danger float-end"><i class='fa fa-low-vision'></i></small>
                    @endif
                </h5>

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <a href="{{ url('storage/' . $partenaire->image) }}" class="glightbox2"
                            data-glightbox='title:Description Bottom; description: You can set the position of the description'>
                            <img src="{{ url('storage/' . $partenaire->image) }}" alt="user-avatar" class="d-block rounded" height="100"
                                width="100" id="uploadedAvatar" />
                        </a>
                        <div class="button-wrapper">
                            <div>
                                <h5 class="menu-header-subtitle"><span class="text-primary">Image d'en-tête</span></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        
                        <div class="button-wrapper">
                            <div>
                                <h5 class="menu-header-subtitle"><span class="text-primary">Titre :</span> {{$partenaire->nom}}</h5>
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
                                    <div class="text-primary opacity-8">Contenu</div>
                                </h3>
                                <div class="widget-heading opacity-8">
                                    <span class="">{!!$partenaire->contenu!!}</span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <h5 class="text-primary">Informations du Partenaire :</h5>
                                <p><strong>Nom:</strong> {{ $partenaire->nom }}</p>
                                <p><strong>Email:</strong> {{ $partenaire->email }}</p>
                                <p><strong>Téléphone:</strong> {{ $partenaire->telephone }}</p>
                                <p><strong>Adresse:</strong> {{ $partenaire->adresse }}</p>
                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <div id="bulk-select-replace-element" style="margin-right: 20px">
                                    <a href="{{ route('partenaire.edit', $partenaire->id) }}">
                                        <button class="btn  btn-success" title="Modifier les informations du partenaire"
                                            type="button"><i class="fa fa-pen"></i> Modifier</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

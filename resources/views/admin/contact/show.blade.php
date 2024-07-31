<div class="modal fade" id="detailcontact{{ $contact->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="detailcontact{{ $contact->id }}Label">Detail de l'encontact
                    </h4>
                    {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                </div>
                    <h5 class="card-header">Détail de l'en contact #{{ $contact->id }}
                    @if ($contact->statut == true)
                        <small class="badge rounded-pill bg-success float-end"><i class='fa fa-bullseye'></i></small>
                    @else
                        <small class="badge rounded-pill bg-danger float-end"><i class='fa fa-low-vision'></i></small>
                    @endif</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <a href="{{ url('storage/' . $contact->photo) }}" class="glightbox2"
                                data-glightbox='title:Description Bottom; description: You can set the position of the description &lt;a href="http://google.com"&gt;with a link to Google&lt;/a&gt;'>
                            <img src="{{ url('storage/' . $contact->photo) }}" alt="user-avatar" class="d-block rounded" height="200"
                                width="200" id="uploadedAvatar" />
                            </a>
                            <div class="button-wrapper">
                                <div>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Adresse :
                                        </span>{{ $contact->adresse }}</h5>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Telephone :
                                        </span>{{ $contact->tel }}</h5>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Email :
                                        </span>{{ $contact->email }}</h5>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Site web :
                                        </span>{{ $contact->site }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

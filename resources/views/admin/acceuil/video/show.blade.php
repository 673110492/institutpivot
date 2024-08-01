<div class="modal fade" id="detailvideo{{ $video->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="detailvideo{{ $video->id }}Label">Detail de l'envideo
                    </h4>
                    {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                </div>
                    <h5 class="card-header">Détail de l'en video #{{ $video->id }}
                    @if ($video->statut == true)
                        <small class="badge rounded-pill bg-success float-end"><i class='fa fa-bullseye'></i></small>
                    @else
                        <small class="badge rounded-pill bg-danger float-end"><i class='fa fa-low-vision'></i></small>
                    @endif</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <a href="{{ url('storage/' . $video->photo) }}" class="glightbox2"
                                data-glightbox='title:Description Bottom; description: You can set the position of the description &lt;a href="http://google.com"&gt;with a link to Google&lt;/a&gt;'>
                            <img src="{{ url('storage/' . $video->photo) }}" alt="user-avatar" class="d-block rounded" height="200"
                                width="200" id="uploadedAvatar" />
                            </a>
                            <div class="button-wrapper">
                                <div>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Titre :
                                        </span>{{ $video->titre }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="widget-content-left">
                            <h3>
                                <div class="text-primary opacity-8">Video</div>
                            </h3>
                            <div class="widget-heading opacity-8">
                                <a href="{{ url('storage/' . $video->video) }}" class="glightbox2"
                                    data-glightbox='title:Description Bottom; description: You can set the position of the description &lt;a href="http://google.com"&gt;with a link to Google&lt;/a&gt;'>
                                <video src="{{ url('storage/' . $video->video) }}" alt="user-avatar" class="d-block rounded" height="200"
                                    width="500" id="uploadedAvatar"></video>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

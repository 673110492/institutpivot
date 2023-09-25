<div class="modal fade" id="detailmessage{{ $message->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">

                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="detailmessage{{ $message->id }}Label">Detail d'un message
                    </h4>
                    {{-- <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p> --}}
                </div>
                    <h5 class="card-header">Détail d'un message #{{ $message->id }}</h5>
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <div class="button-wrapper">
                                <div>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Nom :
                                        </span>{{ $message->noms }}</h5>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Email :
                                        </span>{{ $message->email }}</h5>
                                    <h5 class="menu-header-subtitle"><span class="text-primary">Sujet :
                                        </span>{{ $message->sujet }}</h5>
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
                                        <div class="text-primary opacity-8">Message</div>
                                    </h3>
                                    <div class="widget-heading opacity-8">
                                        <span class="">{!!$message->message!!}</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

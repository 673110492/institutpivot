{{-- <div class="modal fade" id="{{ 'event' . $event_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $url }}" method="{{ $event_verb ?? 'POST' }}">
                @if (!isset($event_verb) || $event_verb == 'POST')
                @csrf
                @endif
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                        <h4 class="mb-1">{{ $event_title ?? 'Confirmer cette action' }}
                        </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <h5>{{ $event_body ?? 'Voulez vous continuer cette operation?' }}</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-falcon-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                    <button class="btn btn-falcon-danger" type="submit">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}


<div class="modal fade" id="{{ 'event' . $event_id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Êtes vous sûr(e) de vouloir continuer cette opération?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{ $url }}" method="{{ $event_verb ?? 'POST' }}">
                        @if (!isset($event_verb) || $event_verb == 'POST')
                        @csrf
                        @endif
                        <div class="col-6">
                            <button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
                                data-dismiss="modal"><i class="fa fa-times"></i></button>
                            NON
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn"
                                type="submit"><i class="fa fa-check"></i></button>
                            OUI
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

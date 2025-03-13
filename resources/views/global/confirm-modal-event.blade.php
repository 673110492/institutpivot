
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

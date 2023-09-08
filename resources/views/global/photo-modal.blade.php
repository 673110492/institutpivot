<div class="modal fade" id="{{ 'photo' . $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <center>
            <div class="modal-body p-3">
                <div class="d-flex d-flex align-items-center">
                    <div class="avatar avatar-xxl me-2">
                        <div ><img class="avatar" src="{{ isset($item->photo) ? url('storage/'.$item->photo) : url('assets/img/team/avatar.png') }}" /></div>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>
</div>

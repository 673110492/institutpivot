<div class="modal fade" id="{{ 'delete' . $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $url }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                        <h4 class="mb-1" id="modalExampleDemoLabel">Confirmer la suppression </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <h5>Cette action est irreversible: voulez vous vraiment supprimer??</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-falcon-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                    <button class="btn btn-falcon-danger" type="submit">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>

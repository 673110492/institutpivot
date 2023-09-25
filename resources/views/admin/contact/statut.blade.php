<div class="modal fade" id="{{ 'statut' . $contact->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info ">
                <h5 class="modal-title text-white" id="exampleModalLabel">Activation des éléments</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="p-3">
                <form action="{{ $url }}" method="POST">
                     @csrf
                     @method('POST')
                        <div class="">
                            <div class="pb-0">
                                @if ($contact->statut == true)
                                  <h5>Voulez-vous vraiment cacher ces informations?</h5>
                                @else
                                  <h5>Voulez-vous vraiment afficher ces informations?</h5>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                            @if ($contact->statut == true)
                                <button type="submit" class="btn btn-warning">Cacher</button>
                            @else
                                <button type="submit" class="btn btn-success">Afficher</button>
                            @endif
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>

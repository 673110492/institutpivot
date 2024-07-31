
<div class="modal fade" id="{{ 'type' .$formation->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body p-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                        <div class="position-relative z-index-1 light">
                          <h4 class="mb-0 text-white" id="authentication-modal-label">Liste des Types de formation</h4>
                        </div>
                    </div>
                    <div class="p-4 pb-0">
                    <div class="d-flex align-items-center justify-content-end my-3">
                                    <div id="bulk-select-replace-element" style="margin-right: 20px"><a
                                            class="btn btn-falcon-success btn-sm" href="{{route('formation.ajouttype',$formation->id)}}"><span class="fas fa-plus"
                                                data-fa-transform="shrink-3 down-2"></span><span
                                                class="ms-1">Ajouter</span></a></div>
                    </div>
                            <hr><h5 class="row"><b class="col-md">Type formation</b><b class="col-md">Duree</b><b class="col-md">Prix</b><b class="col-md">Action</b></h5><hr>
                            @forelse ($types as $item)
                            <h5 class="row"><span class="col-md">{{ $item->nom }}</span><span class="col-md">{{$item->duree}}</span><span class="col-md">{{ $item->prix }}</span><b class="col-md">
                            <a class="btn btn-falcon-primary me-1 mb-1" href="{{route('formation.edittype',$item->id)}}"
                                                            title="Modifier une formation"><i
                                                                class="fa fa-pen"></i></a>
                                                                <form action="{{route('formation.deletetype',$item->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                                </form>
                                                                
                            </b></h5><hr>
                            @empty
                              <h5><center>aucun type</center></h5>
                            @endforelse
                    </div>
                </div>
        </div>
    </div>
</div>


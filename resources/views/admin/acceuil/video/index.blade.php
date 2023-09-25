@extends('admin.layouts.app')
@section('content')

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Gestion de l'accueil</h3>
                <p class="mb-0"><a href="{{ url('/home') }}">Dashboard</a> / Accueil</p>
            </div>
            <br>
            <div class="col-12">
                @if ($errors->any())
                <ul class="alert alert-danger" style="padding-left: 10px">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row flex-between-end">
            <div class="col-auto align-self-center">
                <h5 class="mb-0">Liste des videos</h5>
            </div>
            <div class="col-auto align-self-center" style="margin-right: 20px">
                <h5>Total : {{$videos->count()}}</h5>
            </div>
            <div class="card-body py-0 border-top">
                <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel"
                        aria-labelledby="tab-dom-b5b90702-8f53-4c41-812c-1124c578a4c4"
                        id="dom-b5b90702-8f53-4c41-812c-1124c578a4c4">
                        <div class="card shadow-none">
                            <div class="card-body p-0 pb-3">
                                <div class="d-flex align-items-center justify-content-end my-3">
                                    <div id="bulk-select-replace-element" style="margin-right: 20px">
                                        <button title="Ajout d'une video"  data-bs-toggle="modal" data-bs-target="#ajoutvideo"  class="btn btn-falcon-success btn-sm">
                                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                            <span class="ms-1">Ajouter</span>
                                        </button>
                                    </div>
                                    <div class="d-none ms-3" id="bulk-select-actions">
                                        <div class="d-flex"><select class="form-select form-select-sm"
                                                aria-label="Bulk actions">
                                                <option selected="selected">Bulk actions</option>
                                                <option value="Delete">Delete</option>
                                                <option value="Archive">Archive</option>
                                            </select><button class="btn btn-falcon-danger btn-sm ms-2"
                                                type="button">Apply</button></div>
                                    </div>
                                </div>
                                <div  id="ordersTable"
                                    data-list='{"valueNames":["nom","email","adresse","sexe","tel"],"page":10,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-striped mb-0 fs--3 overflow-hidden">
                                            <thead class="bg-200 text-900">
                                                <tr>
                                                    <th class="align-middle white-space-nowrap">
                                                        <div class="form-check mb-0"><input class="form-check-input"
                                                                type="checkbox"
                                                                data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                                        </div>
                                                    </th>
                                                    <th class="align-middle" data-sort="nom">Titre</th>
                                                    <th class="align-middle" data-sort="sexe">Statut</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="table-orders-body">
                                                @forelse ( $videos  as $item)
                                                <tr class="btn-reveal-trigger">
                                                    <td class="align-middle white-space-nowrap">
                                                        <div class="form-check mb-0"><input class="form-check-input"
                                                                type="checkbox" id="checkbox-1"
                                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                                    </td>
                                                    <td class="align-middle nom">{!! Str::limit($item->titre, 30, '...')  !!}</td>
                                                    <td class="align-middle nom">
                                                        @if ($item->statut == true)
                                                        <small class="badge rounded-pill  bg-success"><i
                                                            class='fa fa-bullseye'></i>Afficher</small>
                                                        @else
                                                        <small class="badge rounded-pill  bg-danger"><i
                                                            class='fa fa-low-vision'></i>Cacher</small>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle mr-20">
                                                        <button class="btn btn-falcon-info me-1 mb-1"
                                                            title="Détail d'une video"  data-bs-toggle="modal"
                                                            data-bs-target="#detailvideo{{ $item->id }}" type="button"><i
                                                                class="fa fa-eye"></i></button>
                                                        <button class="btn btn-falcon-primary me-1 mb-1" title="Modifier une video" data-bs-toggle="modal"
                                                                data-bs-target="#editvideo{{ $item->id }}"
                                                                type="button"><i class="fa fa-pen"></i>
                                                        </button>
                                                        <button class="btn btn-falcon-danger me-1 mb-1" title="Supprimer une video"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#{{ 'delete' . $item->id }}"><i class="fa fa-trash"
                                                                aria-hidden="true"></i></button>
                                                                @if ($item->statut == true)
                                                                        <button type="button" class="btn btn-falcon-warning" data-bs-toggle="modal" data-bs-target="#{{ 'statut' . $item->id }}"><i class="fa fa-low-vision"></i> Cacher</button>
                                                                @else
                                                                        <button type="button" class="btn btn-falcon-success" data-bs-toggle="modal" data-bs-target="#{{ 'statut' . $item->id }}"><i class="fa fa-bullseye"></i> Afficher</button>
                                                                @endif
                                                        @include('global.delete-modal', [
                                                        'id' => $item->id,
                                                        'url' => route('video.delete', $item->id),
                                                        ])
                                                        @include('admin.acceuil.video.statut', [
                                                            'video' => $item,
                                                            'url' => route('video.statut', $item->id),
                                                        ])

                                                    @include('admin.acceuil.video.edit', [
                                                        'video'  => $item,
                                                    ])
                                                    @include('admin.acceuil.video.show', [
                                                        'video'  => $item,
                                                    ])
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="10">
                                                        <center>
                                                            Aucune informations...
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-center"><button
                                                class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                                type="button" title="Next" data-list-pagination="next"><span
                                                    class="fas fa-chevron-right"> </span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- MODAL CREATE --}}
    @include('admin.acceuil.video.create')
@endsection

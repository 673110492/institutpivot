@extends('front1.layouts.app')
@section('content')

<style>
    @media (max-width: 768px) {
        .course-title {
            font-size: 18px;
        }

        .course-readmore a {
            font-size: 14px;
        }

        .course-wrap-thumbnail img {
            width: 100% !important;
            height: auto !important;
        }

        .learn-press-courses .lp_course {
            margin-bottom: 1.5rem;
        }
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .course-item {
        background-color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    .course-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }
</style>

<section class="breadcrumb_part blog_grid_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="breadcrumb_iner text-center">
                    <h2>Formations</h2>
                    <div class="breadcrumb_iner_link">
                        <a href="{{ route('accueil.index') }}">Accueil</a>
                        <i class="arrow_carrot-right"></i>
                        <span>Formations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course_details padding_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8 col-12 text-center" data-aos="fade-up" data-aos-duration="1200">
                <div class="motivation_video1">
                    <a href="{{ isset($video) ? url('storage/' . $video->video) : '#' }}" class="animated_play_button popup_youtube">
                        <span class="flaticon-play-button"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="content" class="site-content">
    <div class="lp-archive-courses">
        <div class="lp-content-area container">
            <header class="learn-press-courses-header text-center mb-4">
                <h1>Formations</h1>
                <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                    <button onclick="cours(0)" class="btn btn-primary" id="type_0">Toutes les formations</button>
                    @foreach($types as $item)
                        <button onclick="cours('{{ $item->id }}')" id="{{ 'type_' . $item->id }}" class="btn btn-primary">{{ $item->nom }}</button>
                    @endforeach
                </div>
            </header>

            <ul class="learn-press-courses row row-cols-1 row-cols-md-2 row-cols-lg-3" data-layout="list" id="tet">
                @foreach($formations as $item)
                    <li class="post-1026 lp_course col mb-4">
                        <div class="course-item shadow-sm rounded p-2 h-100 d-flex flex-column">
                            <div class="course-wrap-thumbnail mb-2">
                                <a href="{{ route('cours.show', $item->id) }}">
                                    <img class="img-fluid course-img w-100" src="{{ isset($item->photo) ? url('storage/' . $item->photo) : '#' }}" alt="{{ $item->nom }}" loading="lazy" title="{{ $item->nom }}">
                                </a>
                            </div>
                            <div class="course-content flex-grow-1">
                                <a href="{{ route('cours.show', $item->id) }}" class="course-permalink">
                                    <h3 class="course-title h5">{{ $item->nom }}</h3>
                                </a>
                                <div class="meta-item mb-2"><span class="text-primary">Durée : </span>Aléatoire</div>
                                <div class="meta-item mb-2"><span class="text-primary">Niveau : </span>Intermédiaire</div>
                                <div class="course-excerpt mb-2">{!! Str::limit($item->description, 150, '...') !!}</div>
                                <div class="course-footer d-flex justify-content-between align-items-center mt-auto">
                                    <span class="price text-primary">Aléatoire XAF</span>
                                    <a href="{{ route('cours.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <nav class="learn-press-pagination d-flex justify-content-center mt-4">
                <ul class="page-numbers pagination">
                    <li class="page-item"><span class="page-link active">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="arrow_right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script defer>
    function cours(id) {
        let table = document.getElementById('tet');
        $.ajax({
            url: `/cours/search_cours/${id}`,
            type: 'GET',
            success: function(data) {
                let content = "";
                data.forEach(item => {
                    let duree = item.duree ?? "Aléatoire";
                    content += `
                    <li class="post-1026 lp_course col mb-4">
                        <div class="course-item shadow-sm rounded p-2 h-100 d-flex flex-column">
                            <div class="course-wrap-thumbnail mb-2">
                                <a href="/cours/${item.id}">
                                    <img class="img-fluid course-img w-100" src="/storage/${item.photo}" alt="${item.nom}" loading="lazy" title="${item.nom}">
                                </a>
                            </div>
                            <div class="course-content flex-grow-1">
                                <a href="/cours/${item.id}" class="course-permalink">
                                    <h3 class="course-title h5">${item.nom}</h3>
                                </a>
                                <div class="meta-item mb-2"><span class="text-primary">Durée : </span>${duree}</div>
                                <div class="course-readmore mt-auto">
                                    <a href="/cours/${item.id}" class="btn btn-outline-primary btn-sm">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    </li>`;
                });
                table.innerHTML = content;
            },
            error: function(err) {
                console.error('Erreur :', err);
            }
        });
    }
</script>
@endpush

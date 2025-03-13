@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Formations</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
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
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-md-6">
                </div>
                <div class="col-xl-3 col-md-2" data-aos="fade-up" data-aos-duration="1200">
                    <div class="motivation_video1">
                        <a href="{{ isset($video) ? url('storage/' . $video->video) : '#' }}" class="animated_play_button popup_youtube">
                            <span class="flaticon-play-button"></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5" data-aos="fade-up" data-aos-duration="1200">
                </div>
            </div>
        </div>
    </section>

    <div id="content" class="site-content">
        <div class="lp-archive-courses">
            <div class="lp-content-area">
                <header class="learn-press-courses-header ml-4 mb-5">
                    <h1>Formations</h1>
                    <button onclick="cours(0)" class="btn btn-primary" id="type_0">Toutes les formations</button>
                    @foreach($types as $item)
                        <button onclick="cours('{{ $item->id }}')" id="{{ 'type_' . $item->id }}" class="btn btn-primary">{{ $item->nom }}</button>
                    @endforeach
                </header>

                <ul class="learn-press-courses" data-layout="list" id="tet">
                    @foreach($formations as $item)
                        <li class="post-1026 lp_course">
                            <div class="course-item">
                                <div class="course-wrap-thumbnail">
                                    <a href="{{ route('cours.show', $item->id) }}">
                                        <div class="thumbnail-preview">
                                            <div class="thumbnail">
                                                <div class="centered">
                                                    <img width="370" height="280" src="{{ isset($item->photo) ? url('storage/' . $item->photo) : '#' }}" alt="{{ $item->nom }}" loading="lazy" title="{{ $item->nom }}">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="course-content">
                                    <div class="course-categories">
                                        <a href="{{ route('cours.show', $item->id) }}">{{ $item->nom }}</a>
                                    </div>
                                    <a href="{{ route('cours.show', $item->id) }}" class="course-permalink">
                                        <h3 class="course-title">{{ $item->nom }}</h3>
                                    </a>
                                    <div class="course-wrap-meta">
                                        <div class="meta-item meta-item-duration"><span class="text-primary">Durée : </span>Aléatoire</div>
                                        <div class="meta-item meta-item-level"><span class="text-primary">Niveau : </span>Intermédiaire</div>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="course-info">
                                        <div class="course-excerpt">{!! Str::limit($item->description, 150, '...') !!}</div>
                                        <div class="course-footer">
                                            <div class="course-price">
                                                <span class="price text-primary">Aléatoire XAF</span>
                                            </div>
                                        </div>
                                        <div class="course-readmore">
                                            <a href="{{ route('cours.show', $item->id) }}">Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <nav class="learn-press-pagination">
                    <ul class="page-numbers">
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><i class="arrow_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection

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
                    let prix = item.prix ?? "Aléatoire";

                    content += `
                    <li class="post-1026 lp_course">
                        <div class="course-item">
                            <div class="course-wrap-thumbnail">
                                <a href="/cours/${item.id}">
                                    <img width="370" height="280" src="/storage/${item.photo}" alt="${item.nom}" loading="lazy" title="${item.nom}">
                                </a>
                            </div>
                            <div class="course-content">
                                <div class="course-categories">
                                    <a href="/cours/${item.id}">${item.nom}</a>
                                </div>
                                <a href="/cours/${item.id}" class="course-permalink">
                                    <h3 class="course-title">${item.nom}</h3>
                                </a>
                                <div class="course-wrap-meta">
                                    <div class="meta-item meta-item-duration"><span class="text-primary">Durée : </span>${duree}</div>
                                    <div class="meta-item meta-item-level"><span class="text-primary">Niveau : </span>Intermédiaire</div>
                                </div>
                                <div class="course-readmore">
                                    <a href="/cours/${item.id}">Voir plus</a>
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

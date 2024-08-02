@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>A Propos</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>A Propos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us section_padding" style="background-color: #E3E3E3;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_img">
                    <img src="{{isset($about) ? url('storage/'. $about->photo) : '#'}}" alt="#" class="img-fluid">
                    <!-- <img src="{{isset($about) ? url('storage/'. $about->photo) : '#'}}" alt="#" class="img-fluid"> -->
                        <div class="about_tricker">
                            <div class="tricker_iner">
                            <p>Agréée <br><b style="font-size: 1.5em;">MINEFOP</b></p>
                                </div>
                        </div>
                        <img src="img/animated_icon/about_icon.png" alt="#" class="about_icon custom-animation">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_details">
                        <h2>{{isset($about->titre) ? $about->titre : "A propos de nous"}}</h2>
                        <h3>20 ans d'experience</h3>
                        <p style="text-align: justify">{{isset($about->titre) ? $about->titre : "Nous sommes une institut de formation spécialisée dans le domaine informatique"}}</p>
                            <h3><span>Conatcter nous</span>+237 659218936</h3>
                        <a href="{{route('cours.index')}}" class="btn_1">Voir les formations</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/icon/about_shape_01.png" alt="#" class="about_sharp_1">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
    </section>
    <section class="motivation section_bg" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="motivation_content">
                        <h2>{{isset($video->titre) ? $video->titre : "Notre vision"}}</h2>
                        {{-- <p>Cack gormless young delinquent that bits and bobs he nicked it mush, spiffing smashing he legged it have it codswallop.</p> --}}
                        <ul class="nav nav-tabs" id="motivation_content_tab" role="tablist">
                            @foreach ($formations->take(3) as $item)
                            <li class="nav-item">
                                <a class="nav-link single_item" data-toggle="tab" href="#Design" role="tab" aria-selected="true" id="Design-tab" data-aos="fade-up" data-aos-duration="700">
                                    <i class="icon_book_alt"></i>
                                    <p>{{$item->nom}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="motivation_content_tabcontent">
            <div class="tab-pane fade show active" id="Design" role="tabpanel" aria-labelledby="Design-tab">
                <div class="motivation_video">
                    <a href="{{isset($video) ? url('storage/' . $video->video) : '#'}}" class="animated_play_button popup_youtube">
                    <span class="flaticon-play-button"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- motivation part end -->
    <!-- event part here -->
    <section class="event_list section_padding" style="background-color: #E3E3E3;">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up"
                data-aos-duration="1200">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Les Témoignages</h2>
                        {{-- <p>!Jeffrey crikey victoria sponge mush spiffing
                        super arse over tit matie boy smashing. The little
                        rotter off his nut codswallop.!</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach ($autres->take(3) as $item)
                    <div class="single_event_list bg-white" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid">
                        <div class="event_list_content">
                            <h5 class="text-primary">{{$item->fonction}}</h5>
                            <h2 class="mt-3">{{$item->nom}}</h2>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <img src="img/icon/shape_06.png" alt="#" class="about_sharp_1 custom-animation">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
        <img src="img/icon/shape_04.png" alt="#" class="about_sharp_4 custom-animation4">
        <img src="img/icon/shape_05.png" alt="#" class="about_sharp_5 custom-animation5">
    </section>
@endsection

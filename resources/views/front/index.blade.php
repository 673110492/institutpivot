@extends('front.layouts.app')
@section('content')
    <!-- slider part here -->
    <section class="banner_part owl-carousel">
        <div class="single_banner_part bg_1">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5 style="font">Bienvenue Sur Notre Plateforme</h5>
                            <h2>Formation Intégralement Numérique</h2>
                            <a href="{{route('cours.index')}}" class="btn_2">Nos Formations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part bg_2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5>Une Formation Pour Un Métier</h5>
                            <h2>Développez Une Passion Et Faites-en Une Carrière </h2>
                            <a href="{{route('cours.index')}}" class="btn_2">Nos Formations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_banner_part bg_3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5>Elaboration Et Conduite Des Projets Professionnels</h5>
                            <h2>Accompagnement Et Insertion Dans Le Monde Digital</h2>
                            <a href="{{route('cours.index')}}" class="btn_2">Nos Formations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider part end -->
    <!-- course details part here -->
    <section class="course_details padding_bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-md-86">
                    <div class="course_details_iner">
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1200">
                            <img src="img/icon/course_1.svg" alt="">
                            <h4>Admission</h4>
                            <p>Admission possible et ouverte pendant toute l’année.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1600">
                            <img src="img/icon/course_2.svg" alt="">
                            <h4>Cours en ligne</h4>
                            <p>Travailler de la maison, du bureau, de n’importe où a votre rythme .</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2000">
                            <img src="img/icon/course_3.svg" alt="">
                            <h4>Diplômes</h4>
                            <p>Diplômes reconnus au niveau National et International (DQP, CQP, Attestation ministérielle).</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2400">
                            <img src="img/icon/course_4.svg" alt="">
                            <h4>Carrières</h4>
                            <p>Le digital s’intègre dans tout corps de métier.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-2 col-md-2" data-aos="fade-up"
                    data-aos-duration="1200">
                    <div class="course_registration">
                        <div class="course_registration_form">
                            <div class="" id="">
                                <div class="" >
                                    <div class="motivation_video1">
                                        <a href="{{isset($video) ? url('name/' . $video->video) : '#'}}" class="animated_play_button popup_youtube">
                                        <span class="flaticon-play-button"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-4 col-md-5" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="course_registration">
                        <div class="course_registration_form">
                            <h3>Préinscription<br>
                            pour une formation</h3>
                            <form action="#">
                                <input type="text" name="#" placeholder="Nom complet">
                                <input type="email" name="#" placeholder="Email">
                                <input type="phone" name="#" placeholder="Téléphone">
                                <select name="#" class="niceSelect">
                                    <option disabled selected>Choisir une formation</option>
                                    @foreach ($formations as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <a href="#" class="btn_1">Enrégistrer</a>
                                <div class="countdown"  id="timer">
                                    <div class="time" id="days" data-aos="fade-up"
                                    data-aos-duration="600"></div>
                                    <div class="time" id="hours" data-aos="fade-up"
                                    data-aos-duration="800"></div>
                                    <div class="time" id="minutes" data-aos="fade-up"
                                    data-aos-duration="1000"></div>
                                    <div class="time" id="seconds" data-aos="fade-up"
                                    data-aos-duration="1200"></div>
                                </div>
                            </form>
                        </div>
                        <img src="img/animated_icon/cources_details_bg.png" alt="#" class="custom-animation1 cources_details_bg">
                        <img src="img/animated_icon/animated_icon_1.png" alt="#" class="custom-animation2 cources_details_icon">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course details part end -->
    <!-- about us part here -->
    <section class="about_us section_padding" style="background-color: #E3E3E3;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_img">
                    <img src="{{isset($about) ? url('name/'. $about->photo) : '#'}}" alt="#" class="img-fluid">
                    <!-- <img src="{{isset($about) ? url('name/'. $about->photo) : '#'}}" alt="#" class="img-fluid"> -->
                        <div class="about_tricker">
                            <div class="tricker_iner">
                                <p>Agréée <br><b style="font-size: 1.5em;">MINEFOP</b></p>
                                <!-- <span>MINEFOP </span> -->
                            </div>
                        </div>
                        <img src="img/animated_icon/about_icon.png" alt="#" class="about_icon custom-animation">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6" data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-duration="700">
                    <div class="about_us_details">
                        <h2>{{$about->titre}}</h2>
                        <h3>20 ans d'experience</h3>
                        <p style="text-align: justify">{{$about->contenu}}</p>
                            <h3><span>Conatacter nous</span> +237 659218936</h3>
                        <a href="{{route('cours.index')}}" class="btn_1">Voir les formations</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/icon/about_shape_01.png" alt="#" class="about_sharp_1">
        <img src="img/icon/about_shape_02.png" alt="#" class="about_sharp_2 custom-animation2">
        <img src="img/icon/about_shape_03.png" alt="#" class="about_sharp_3 custom-animation3">
    </section>
    <!-- about us part end -->
     <!-- popular course part here -->
     <section class="popular_course section_padding section_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up"
                data-aos-duration="1200">
                    <div class="section_tittle">
                        <h2>Découvrez nos <br>
                            cours populaires</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="popular_courses_item owl-carousel">
                        @foreach ($formations as $item)
                        <div data-aos="fade-up" data-aos-duration="1200" class="single_courses_item">
                            <a href="{{route('cours.show',$item->id)}}"><img src="{{isset($item->photo) ? url('name/' . $item->photo) : '#'}}" alt="#" class="img-fluid"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">{{$item->prix}}XAF</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(120 Avis)</span>
                                </div>
                                <a href="{{route('cours.show',$item->id)}}"><h4 class="text-primary" style="font-weight: bold">{{$item->nom}}</h4></a>
                                <p>{!! Str::limit($item->description, 100, '...')  !!}</p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>10 leçons</p>
                                    <p><i class="icon_profile"></i>120</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular course part end -->
       <!-- student review part here -->
       <section class="student_review section_padding" >
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-up"
            data-aos-anchor-placement="top-center">
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="student_review_tittle">
                        <h2>Les étudiants <br> parlent de nous.</h2>
                        <img src="img/quote.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="student_review_iner owl-carousel">
                        @foreach ($temoignages as $item)
                        <div class="single_student_review">
                            <p>{{$item->description}}</p>
                            <div class="student_review_content">
                                <img src="{{isset($item->photo) ? url('name/' . $item->photo) : '#'}}" alt="">
                                <div class="student_info">
                                    <h4>{{$item->nom}}</h4>
                                    <p>{{$item->formation->nom}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section>
    <!-- student review part end -->
    <!-- motivation part here -->
    <section class="motivation section_bg" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="motivation_content">
                        <h2>{{$video->titre}}</h2>
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
                    <a href="{{isset($video) ? url('name/' . $video->video) : '#'}}" class="animated_play_button popup_youtube">
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
                        <h2>Autres témoignages</h2>
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
                        <img src="{{isset($item->photo) ? url('name/' . $item->photo) : '#'}}" alt="" class="img-fluid">
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
    <!-- event part end -->
@endsection

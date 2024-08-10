@extends('front.layouts.app')
@section('content')
<style>
    .formation{
        border: 1px solid #dce1e9;
        color: #7c8189;
        height: 50px;
        background-color: #dce1e9;
        padding: 0 20px;
        border-radius: 20px;
        float: inherit;
        font-weight: 300;
       
     }
</style>
    <!-- slider part here -->
    <section class="banner_part owl-carousel">
        <div class="single_banner_part bg_1">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="banner_iner">
                            <h5 >Bienvenue Sur Notre Plateforme</h5>
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
                            <p style="text-align:justify">Admission possible et ouverte pendant toute l’année.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="1600">
                            <img src="img/icon/course_2.svg" alt="">
                            <h4>Cours en ligne</h4>
                            <p style="text-align:justify">Travailler de la maison, du bureau, de n’importe où a votre rythme .</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2000">
                            <img src="img/icon/course_3.svg" alt="">
                            <h4>Diplômes</h4>
                            <p style="text-align:justify">Diplômes reconnus au niveau National et International (DQP, CQP, Attestation ministérielle), Certifications internationales.</p>
                        </div>
                        <div class="single_course_list" data-aos="fade-up"
                        data-aos-duration="2400">
                            <img src="img/icon/course_4.svg" alt="">
                            <h4>Carrières</h4>
                            <p style="text-align:justify">Le digital s’intègre dans tout corps de métier (Développeur web et mobile, Administrateur réseau, ...).</p>
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
                                        <a href="{{isset($video) ? url('storage/' . $video->video) : '#'}}" class="animated_play_button popup_youtube">
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
                            <form method="POST" action="{{ route('preinscription.store')}}" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <input type="text" name="nom" placeholder="Nom complet">
                                <input type="email" name="email" placeholder="Email">
                                <input type="phone" name="telephone" placeholder="Téléphone">
                                <select onchange="change()" id="type_formation_id" name="type_formation_id" class="niceSelect">
                                    <option disabled selected>Choisir une catégorie de formation</option>
                                    @foreach ($types as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                    @endforeach
                                </select>
                                <select name="formation_id" id="formation" class="form-control formation" >
                                    <option disabled selected>Choisir une formation</option>
                                    
                                </select>
                                <button class="btn_1" type="submit">Se préinscrire</button>
                                <!-- <div class="countdown"  id="timer">
                                    <div class="time" id="days" data-aos="fade-up"
                                    data-aos-duration="600"></div>
                                    <div class="time" id="hours" data-aos="fade-up"
                                    data-aos-duration="800"></div>
                                    <div class="time" id="minutes" data-aos="fade-up"
                                    data-aos-duration="1000"></div>
                                    <div class="time" id="seconds" data-aos="fade-up"
                                    data-aos-duration="1200"></div>
                                </div> -->
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
                    <img src="{{isset($about) ? url('storage/'. $about->photo) : '#'}}" alt="#" class="img-fluid">
                    <!-- <img src="{{isset($about) ? url('storage/'. $about->photo) : '#'}}" alt="#" class="img-fluid"> -->
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
                    <span style="color:black; font-size: 2.5em;"><b>{{isset($about->titre) ? $about->titre : "A Propos De Nous"}}</b></span>
                        <p style="text-align: justify">{{isset($about->contenu) ? $about->contenu : "Notre vison"}}</p>
                        <h3><span>Conatcts </span>+237 659218936 / 3ia@institut3ia.com</h3>
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
                            <a href="{{route('cours.show',$item->id)}}"><img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="#" height="250"></a>
                            <div class="courses_item_iner">
                                <div class="courses_review">
                                    <a class="courses_btn">Ouverte</a>
                                    <div class="review_icon">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(+100 Avis)</span>
                                </div>
                                <a href="{{route('cours.show',$item->id)}}"><h4 class="text-primary" style="font-weight: bold">{{$item->nom}}</h4></a>
                                <p style="text-align:justify">{!! Str::limit($item->description, 100, '...')  !!}</p>
                                <div class="popular_course_list">
                                    <p><i class="icon_book_alt"></i>+10 Modules</p>
                                    <p><i class="icon_profile"></i>+120</p>
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
                            <p style="text-align:justify">{{$item->description}}</p>
                            <div class="student_review_content">
                                <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="">
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
                        <img src="{{isset($item->photo) ? url('storage/' . $item->photo) : '#'}}" alt="" class="img-fluid">
                        <div class="event_list_content">
                            <h5 class="text-primary">{{$item->fonction}}</h5>
                            <h2 class="mt-3">{{$item->nom}}</h2>
                            <p style="text-align:justify">{{$item->description}}</p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
    function change(){
        let type = document.getElementById('type_formation_id').value;
        let form = document.getElementById('formation');
        $.ajax({
            url:"../preinscription/search_formation/"+type,
            type:'GET',
            data:[],
            success:function(data){
                console.log(data);
                let out = "";
                for(i=0; i < data.length;i++){
                    out = out + `<option value="${data[i].id}"> ${data[i].nom} </option>`;
                }
                console.log(out);
                
                form.innerHTML = out;
                console.log(form);
            },
            error:function(data){
                console.log(data);
                console.log('error',data);
            }
        });
    }
</script>

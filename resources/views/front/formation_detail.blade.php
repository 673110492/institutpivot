@extends('front.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Formations Detail</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Formations</span>
                            <i class="arrow_carrot-right"></i>
                            <span>{{$formation->nom}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single_blog_details">
                        <div data-aos="fade-up"
                            data-aos-duration="1000" class="blog_details_content">
                            <img src="{{isset($formation) ? url('name/'. $formation->photo) : '#'}}" alt="#" class="img-fluid">
                            <h2 class="text-primary">{{$formation->nom}}</h2>
                            <p style="text-align:justify">{{$formation->description}}</p>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_sidebar right-sidebar">
                        <div data-aos="fade-up" data-aos-duration="1200" class="single_sidebar">
                            <form action="#" class="search_form">
                                <input type="text" name="#" placeholder="Search...">
                                <i class="icon_search"></i>
                            </form>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1400" class="single_sidebar">
                            <h3>Autres formations</h3>
                            @foreach($formations as $item)
                            <div class="single_sidebar_post">
                                <img src="{{isset($item) ? url('name/'. $item->photo) : '#'}}" alt="">
                                <div class="sidebar_post_content">
                                    <h4> <a href="{{route('cours.show',$item->id)}}"  class="text-primary"> {{$item->nom}}</a></h4>
                                    <p >{{$item->prix}} XAF</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details part end -->

    <!-- cta part here -->
    <!-- <section class="cta_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta_part_iner">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta_btn">
                        <a href="course-list.html" class="btn_3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle_shape_1"></div>
        <div class="circle_shape_2"></div>
    </section> -->
    <!-- cta part end -->
@endsection
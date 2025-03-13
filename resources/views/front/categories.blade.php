@extends('front1.layouts.app')
@section('content')
<section class="breadcrumb_part blog_grid_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="breadcrumb_iner">
                        <h2>Catégories de formations</h2>
                        <div class="breadcrumb_iner_link">
                            <a href="{{route('accueil.index')}}">Accueil</a>
                            <i class="arrow_carrot-right"></i>
                            <span>Formations</span>
                            <i class="arrow_carrot-right"></i>
                            <span>Catégories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_page section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_blog_details">
                        <div data-aos="fade-up"
                            data-aos-duration="1000" class="blog_details_content container">
                            <h1>Catégries de formation</h1>
                            @foreach($types as $item)
                            <div style="border: 1px solid blue;" class="mt-3 p-3">
                                <h2 class="text-primary">{{$item->nom}}</h2>
                                <p style="text-align:justify">{{$item->description}}</p>
                                <a href="{{route('cours.index')}}" class="btn cat" style="border: 1px solid blue;">Voir les formations</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

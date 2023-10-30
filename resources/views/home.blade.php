@extends('layouts.apps')
@section('content')
@php
if(isset($tete)){
    // background-image: url(images/bg_3.jpg); width: 100%;
    $style = "background-image:url(name/$tete->photo); background-attachment:fixed;";
}
@endphp
@php
if(isset($video)){
    $style2 = "background-image:url(name/$video->photo);";
}
@endphp
@if(isset($tete))
    <div class="hero-wrap" style="{{$style}}">
@else
    <div class="hero-wrap" style="background-image: url('images/IMG_5430.jpg'); background-attachment:fixed;">
@endif
<div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <h1 class="mb-4">{{isset($tete) ? $tete->titre : "AUCUNE NATION NE PEUT PROSPERER SANS EDUCATION"}}</h1>
    <p><a href="{{route('contacter.index')}}" class="btn btn-primary px-4 py-3">Appliquer maintenant</a> <a href="{{route('cours.index')}}" class="btn btn-secondary px-4 py-3">Voir les formations</a></p>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-search-course">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="courseSearch-wrap d-md-flex flex-column-reverse">
        <div class="full-wrap d-flex ftco-animate">
        <div class="one-third order-last p-5">
        <span>Connaitre de quoi vous etes capable?</span>
        <h3>Je veux suivre...</h3>
        <form action="" class="course-search-form">
        <div class="form-group d-flex">
        <input type="text" class="form-control" placeholder="Entrez la formation que vous souhaitez suivre">
        <input type="submit" value="Chercher" class="submit">
        </div>
        </form>
        <p>Pas de correspondance? <a href="{{route('cours.index')}}">Voir toutes les informations</a></p>
        </div>
        <div class="one-forth order-first img" style="background-image: url(images/IMG_5444.jpg);"></div>
        </div>
        <div class="full-wrap ftco-animate">
        <div class="one-half">
        <div class="featured-blog d-md-flex">
        @if(isset($formations))
        @foreach ($formations->take(1) as $item)
        @php
                $stl = "background-image:url(name/$item->photo);";
        @endphp
        <div class="image d-flex order-last">
        <a href="{{route('cours.show',$item->id)}}" class="img" style="{{$stl}}"></a>
        </div>
        <div class="text order-first">
        <h3><a href="{{route('cours.show',$item->id)}}">{{$item->nom}}</a></h3>
        <p>{!! Str::limit($item->description, 150, '...')  !!}</p>
        </div>
        @endforeach
        @endif
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section">
        <div class="container">
        <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
        <div class="media-body px-3">
        <h3 class="heading">Admission</h3>
        <p>Nous offrons des formations flexibles et accessibles par toutes les categories sociales.</p>
        </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
        <div class="media-body px-3">
        <h3 class="heading">Tableau de bord</h3>
        <p>Nous proposons à nos étudiants un programme taillé sur les exigences du terrain à des périodes définies </p>
        </div>
        </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services p-3 py-4 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
        <div class="media-body px-3">
        <h3 class="heading">Notre librairie</h3>
        <p>Nous mettons à la disposition nos étudiants une plétore de documents liéé ou pas à leur formation.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        @if(isset($video))
        <section class="ftco-section-3 img" style="{{$style2}}">
        @else
        <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        @endif
        <div class="overlay"></div>
        <div class="container">
        <div class="row d-md-flex justify-content-center">
        <div class="col-md-9 about-video text-center">
        <h2 class="ftco-animate">{{isset($video) ? $video->titre : "3iA est la meilleure structure de formation dant la ville de Dschang"}}</h2>
        <div class="video d-flex justify-content-center">
        <a href="{{isset($video) ? url('name/' . $video->video) : "#"}}" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
        </div>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-counter bg-light" id="section-counter">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="row">
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
        <div class="text">
        <strong class="number" data-number="150">0</strong>
        <span>Etudaints satisfaits</span>
        </div>
        </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
        <div class="text">
        <strong class="number" data-number="35">0</strong>
        <span>Cours complets</span>
        </div>
        </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
        <div class="text">
        <strong class="number" data-number="15">0</strong>
        <span>Nos experts</span>
        </div>
        </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
        <div class="text">
        <strong class="number" data-number="10">0</strong>
        <span>Nos formations</span>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        @if(isset($temoignages))
        <section class="ftco-section testimony-section" style="background-color: rgb(228, 225, 225)" >
        <div class="container" >
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Témoignages de nos etudaints</h2>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 ftco-animate">
        <div class="carousel-testimony owl-carousel">
        @foreach($temoignages as $item)
        {{-- @dd($item) --}}
            @php
                $styl = "background-image:url(name/$item->photo);";
            @endphp
            <div class="item">
            <div class="testimony-wrap text-center">
            <div class="user-img mb-5" style="{{$styl}}">
            <span class="quote d-flex align-items-center justify-content-center">
            <i class="icon-quote-left"></i>
            </span>
            </div>
            <div class="text">
            <p class="mb-5">{{$item->description}}</p>
            <p class="name">{{$item->nom}}</p>
            <span class="position">{{$item->formation->nom}}</span>
            </div>
            </div>
            </div>
        @endforeach
        </div>
        </div>
        </div>
        </section>
        @endif
        @if(isset($autres))
        <section class="ftco-section bg-light">
            <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Autres témoignages</h2>
            </div>
            </div>
            <div class="row">
            @foreach ($autres as $item)
                @php
                    $sty = "background-image:url(name/$item->photo);";
                @endphp
            <div class="col-lg-4 mb-sm-4 ftco-animate">
            <div class="staff">
            <div class="d-flex mb-4">
            <div class="img" style="{{$sty}}"></div>
            <div class="info ml-4">
            <h3><a href="teacher-single.html">{{$item->nom}}</a></h3>
            <span class="position">{{$item->fonction}}</span>
            <p class="ftco-social d-flex">
            <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
            <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
            <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
            </p>
            </div>
            </div>
            <div class="text">
            <p>{{$item->description}}</p>
            </div>
            </div>
            </div>
            @endforeach
            </div>
            </div>
        </section>
        @endif
        <section class="ftco-freeTrial">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="d-flex align-items-center">
        <div class="free-trial ftco-animate">
        <h3>Essayer nos cours de remise à niveau gratuit</h3>
        <p>Instruisons-nous et donnons-nous le maximum de chance d'avoir un avenir mérité dont on est fière!!!</p>
        </div>
        <div class="btn-join ftco-animate">
        <p><a href="{{route('contacter.index')}}" class="btn btn-primary py-3 px-4">Suivre maintenant!</a></p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        @if(isset($formations))
        <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Nos formations</h2>
        </div>
        </div>
        <div class="row">
            @foreach ($formations->take(3) as $item)
            @php
                    $st = "background-image:url(name/$item->photo);";
                @endphp
            <div class="col-md-4 d-flex ftco-animate">
                <div class="course align-self-stretch">
                <a href="{{route('cours.show',$item->id)}}" class="img" style="{{$st}}"></a>
                <div class="text p-4">
                <p class="category"><span>Prix formation</span><span class="price">{{$item->prix}}</span></p>
                <h3 class="mb-3"><a href="{{route('cours.show',$item->id)}}">{{$item->nom}}</a></h3>
                <p>{!! Str::limit($item->description, 150, '...')  !!}</p>
                <p><a href="#" class="btn btn-primary">S'inscrire!</a></p>
                </div>
                </div>
                </div>
            @endforeach
         <p style="margin: auto;"><a href="{{route('cours.index')}}" class="btn btn-primary">Voir toutes les formations</a></p>

        </div>
        </section>
        @endif
        {{-- <section class="ftco-section bg-light">
            <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            </div>
            </div>
            <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">August 12, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">August 12, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">August 12, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section> --}}
        {{-- <section class="ftco-section">
            <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">Sep. 10, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
            </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">Sep. 10, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
            </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
            </a>
            <div class="text p-4 d-block">
            <div class="meta mb-3">
            <div><a href="#">Sep. 10, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section> --}}

@endsection

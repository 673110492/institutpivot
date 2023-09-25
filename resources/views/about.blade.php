@extends('layouts.apps')
@section('content')
  @php
    if(isset($about)){
        // background-image: url(images/bg_3.jpg); width: 100%;
        $style = "background-image:url(storage/$about->photo); background-attachment:fixed;";
        $style1 = "background-image:url(storage/$about->photo2); width: 100%;";
    }
  @endphp
@php
if(isset($video)){
    $style2 = "background-image:url(storage/$video->photo);";
}
@endphp
  @if(isset($about))
      <div class="hero-wrap hero-wrap-2" style="{{$style}}">
  @else
      <div class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG_5430.jpg'); background-attachment:fixed;">
  @endif
  <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('accueil.index')}}">Accueil</a></span> <span>A Propos</span></p>
    <h1 class="mb-3 bread">A Propos</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section">
    <div class="container">
    <div class="row d-flex">
    <div class="col-md-6 d-flex ftco-animate">
        {{-- @dd($about) --}}
    @if(isset($about))
    <div class="img img-about align-self-stretch" style="{{$style1}}"></div>
    @else
    <div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
    @endif
</div>
    <div class="col-md-6 pl-md-5 ftco-animate">
    <h2 class="mb-4">{{isset($about) ? $about->titre : "Bienvenue à l'institu 3iA"}}</h2>
    <p>{!!isset($about) ? $about->contenu : "Presentation de l'institu 3iA"!!}</p>
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
    <a href="{{isset($video) ? url('storage/' . $video->video) : "#"}}" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
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
    <section class="ftco-section testimony-section">
    <div class="container">
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
            $styl = "background-image:url(storage/$item->photo);";
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

@endsection

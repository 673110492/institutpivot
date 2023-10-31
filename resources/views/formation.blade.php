@extends('layouts.apps')
@section('content')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/IMG_5430.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('accueil.index')}}">Accueil</a></span> <span>Formation</span></p>
    <h1 class="mb-3 bread">Formations</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section">
    <div class="container">
        <div class="row">
        @foreach ($formations as $item)
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
        </div>
    </div>
    </section>

@endsection
